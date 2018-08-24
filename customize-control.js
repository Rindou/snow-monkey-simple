(function() {
  var api = wp.customize;

  api.bind('ready', function() {
    // アーカイブページのレイアウトを非表示
    api.control('archive-page-layout').container.remove();
    api.control.remove('archive-page-layout');

    // パンくずリストの位置を非表示
    api.control('breadcrumbs-position').container.remove();
    api.control.remove('breadcrumbs-position');

    // デフォルトページヘッダー画像を非表示
    api.control('default-page-header-image').container.remove();
    api.control.remove('default-page-header-image');

    // ヘッダーレイアウトを非表示
    api.control('header-layout').container.remove();
    api.control.remove('header-layout');

    // ヘッダーの位置設定をモバイルのみに適用を非表示
    api.control('header-position-only-mobile').container.remove();
    api.control.remove('header-position-only-mobile');

    // ヘッダー位置を非表示
    api.control('header-position').container.remove();
    api.control.remove('header-position');

    // 固定ページでのアイキャッチ画像の表示位置を非表示
    api.control('page-eyecatch').container.remove();
    api.control.remove('page-eyecatch');

    // 投稿ページでのアイキャッチ画像の表示位置を非表示
    api.control('post-eyecatch').container.remove();
    api.control.remove('post-eyecatch');

  });
})(jQuery);
