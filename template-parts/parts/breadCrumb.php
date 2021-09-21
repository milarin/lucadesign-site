<?php
/**
 * パンくずリスト
 * 
 * 
 */

// トップページでは何も出力しないように
if ( is_front_page() ) return false;

//そのページのWPオブジェクトを取得
$wp_obj = get_queried_object();

echo '<div class="bl_breadcrumb">'.  //id名などは任意で
    '<ul>'.
    '<li>'.
    '<a href="'. esc_url( home_url() ) .'"><span class="el_home"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
	<path id="パス_160" data-name="パス 160" d="M229.092,256.625l-5.242-4.61a.566.566,0,0,0-.407-.2h0a.562.562,0,0,0-.407.2l-5.242,4.61c-.411.366-.346.572-.346.572v6.5a.133.133,0,0,0,.142.12h3.835c-.007-1.035-.02-3.294.066-3.79.144-.841.886-1.318,1.952-1.341,1.068.022,1.81.5,1.954,1.341.086.5.07,2.755.064,3.79H229.3a.132.132,0,0,0,.141-.12v-6.5S229.5,256.991,229.092,256.625Z" transform="translate(-217.442 -251.814)" fill="#999"/>
  	</svg>
  	ホーム</span></a>'.
    '</li>';

if ( is_attachment() ) {

        /**
        * 添付ファイルページ ( $wp_obj : WP_Post )
        * ※ 添付ファイルページでは is_single() も true になるので先に分岐
        */
    $post_title = apply_filters( 'the_title', $wp_obj->post_title );
    $post_title = apply_filters( 'the_title', $wp_obj->post_title );
    $post_title_trim = wp_trim_words( $post_title, 14, '...' );
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $post_title_trim ) .'</span></li>';

} elseif ( is_single() ) {

/**
* 投稿ページ ( $wp_obj : WP_Post )
*/
    $post_id    = $wp_obj->ID;
    $post_type  = $wp_obj->post_type;
    $post_title = apply_filters( 'the_title', $wp_obj->post_title );
    $post_title_trim = wp_trim_words( $post_title, 14, '...' );

    // カスタム投稿タイプかどうか
    if ( $post_type !== 'post' ) {

        $the_tax = "";//そのサイトに合わせて投稿タイプごとに分岐させて明示的に指定しても可

        // 投稿タイプに紐づいたタクソノミーを取得 (投稿フォーマットは除く)
        $tax_array = get_object_taxonomies( $post_type, 'names');
        foreach ($tax_array as $tax_name) {
            if ( $tax_name !== 'post_format' ) {
                $the_tax = $tax_name;
                break;
            }
        }

        $post_type_link = esc_url( get_post_type_archive_link( $post_type ) );
        $post_type_label = esc_html( get_post_type_object( $post_type )->label );

        //カスタム投稿タイプ名の表示
        echo '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><a href="'. $post_type_link .'">'.
            '<span>'. $post_type_label .'</span>'.
            '</a>'.
            '</li>';

    } else {

        $the_tax = 'category';  //通常の投稿の場合、カテゴリーを表示

    }

    // 投稿に紐づくタームを全て取得
    $terms = get_the_terms( $post_id, $the_tax );

    // タクソノミーが紐づいていれば表示
    if ( $terms !== false ) {

        $child_terms  = array();  // 子を持たないタームだけを集める配列
        $parents_list = array();  // 子を持つタームだけを集める配列

        //全タームの親IDを取得
        foreach ( $terms as $term ) {
            if ( $term->parent !== 0 ) {
                $parents_list[] = $term->parent;
            }
        }

        //親リストに含まれないタームのみ取得
        foreach ( $terms as $term ) {
            if ( ! in_array( $term->term_id, $parents_list ) ) {
                $child_terms[] = $term;
            }
        }

        // 最下層のターム配列から一つだけ取得
        $term = $child_terms[0];

        if ( $term->parent !== 0 ) {

            // 親タームのIDリストを取得
            $parent_array = array_reverse( get_ancestors( $term->term_id, $the_tax ) );

            foreach ( $parent_array as $parent_id ) {
                $parent_term = get_term( $parent_id, $the_tax );
                $parent_link = esc_url( get_term_link( $parent_id, $the_tax ) );
                $parent_name = esc_html( $parent_term->name );
                echo '<li>'.
                    '<span class="bl_breadcrumb_sep">/</span><a href="'. $parent_link .'">'.
                    '<span>'. $parent_name .'</span>'.
                    '</a>'.
                    '</li>';
            }
        }

        $term_link = esc_url( get_term_link( $term->term_id, $the_tax ) );
        $term_name = esc_html( $term->name );
        // 最下層のタームを表示
        echo '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><a href="'. $term_link .'">'.
            '<span>'. $term_name .'</span>'.
            '</a>'.
            '</li>';
    }

        // 投稿自身の表示
        echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( strip_tags( $post_title_trim ) ) .'</span></li>';

} elseif ( is_page() || is_home() ) {

    /**
    * 固定ページ ( $wp_obj : WP_Post )
    */
    $page_id    = $wp_obj->ID;
    $page_title = apply_filters( 'the_title', $wp_obj->post_title );

    // 親ページがあれば順番に表示
    if ( $wp_obj->post_parent !== 0 ) {
        $parent_array = array_reverse( get_post_ancestors( $page_id ) );
        foreach( $parent_array as $parent_id ) {
            $parent_link = esc_url( get_permalink( $parent_id ) );
            $parent_name = esc_html( get_the_title( $parent_id ) );
            echo '<li>'.
                '<span class="bl_breadcrumb_sep">/</span><a href="'. $parent_link .'">'.
                '<span>'. $parent_name .'</span>'.
                '</a>'.
                '</li>';
        }
    }
    // 投稿自身の表示
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( strip_tags( $page_title ) ) .'</span></li>';

} elseif ( is_post_type_archive() ) {

    /**
    * 投稿タイプアーカイブページ ( $wp_obj : WP_Post_Type )
    */
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $wp_obj->label ) .'</span></li>';

} elseif ( is_date() ) {

    /**
    * 日付アーカイブ ( $wp_obj : null )
    */
    $year  = get_query_var('year');
    $month = get_query_var('monthnum');
    $day   = get_query_var('day');

    if ( $day !== 0 ) {
        //日別アーカイブ
        echo '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><a href="'. esc_url( get_month_link( $year, $month ) ) . '"><span>'. esc_html( $month ) .'月</span></a>'.
            '</li>'.
            '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $day ) .'日</span>'.
            '</li>';

    } elseif ( $month !== 0 ) {
        //月別アーカイブ
        echo '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><a href="'. esc_url( get_year_link( $year ) ) .'"><span>'. esc_html( $year ) .'年</span></a>'.
            '</li>'.
            '<li>'.
            '<span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $month ) .'月</span>'.
            '</li>';

    } else {
        //年別アーカイブ
        echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $year ) .'年</span></li>';

    }

} elseif ( is_author() ) {

                        /**
    * 投稿者アーカイブ ( $wp_obj : WP_User )
    */
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $wp_obj->display_name ) .' の執筆記事</span></li>';

} elseif ( is_archive() ) {

    /**
    * タームアーカイブ ( $wp_obj : WP_Term )
    */
    $term_id   = $wp_obj->term_id;
    $term_name = $wp_obj->name;
    $tax_name  = $wp_obj->taxonomy;

    /* ここでタクソノミーに紐づくカスタム投稿タイプを出力 */

    // 親ページがあれば順番に表示
    if ( $wp_obj->parent !== 0 ) {

        $parent_array = array_reverse( get_ancestors( $term_id, $tax_name ) );
        foreach( $parent_array as $parent_id ) {
            $parent_term = get_term( $parent_id, $tax_name );
            $parent_link = esc_url( get_term_link( $parent_id, $tax_name ) );
            $parent_name = esc_html( $parent_term->name );
            echo '<li>'.
                '<span class="bl_breadcrumb_sep">/</span><a href="'. $parent_link .'">'.
                '<span>'. $parent_name .'</span>'.
                '</a>'.
                '</li>';
        }
    }

    // ターム自身の表示
    echo '<li>'.
        '<span class="bl_breadcrumb_sep">/</span><span>'. esc_html( $term_name ) .'</span>'.
        '</li>';


} elseif ( is_search() ) {

    /**
    * 検索結果ページ
    */
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>「'. esc_html( get_search_query() ) .'」で検索した結果</span></li>';


} elseif ( is_404() ) {

    /**
    * 404ページ
    */
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>お探しの記事は見つかりませんでした。</span></li>';

} else {

    /**
    * その他のページ
    */
    echo '<li><span class="bl_breadcrumb_sep">/</span><span>'. esc_html( get_the_title() ) .'</span></li>';

}

echo '</ul></div>';  // 冒頭に合わせた閉じタグ

?>