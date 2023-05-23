<div id="page-header" style="background:#08074f url('https://sgdevelopment.pl/wp-content/themes/sgdevelopment/assets/images/blue-bg-2.jpg') no-repeat top center">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-end justify-content-center">
                <div class="page-header-content">
                    <div>
                        <h1>{{($page->page_title) ? : $page->title}}</h1>
                        @include('layouts.partials.breadcrumbs', ['items' => $page->ancestors, 'title' => ($page->content_header) ?: $page->title])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
