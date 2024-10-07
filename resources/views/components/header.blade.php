<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <div class="download-button">
                <h1>{{ __('misc.homepage_title') }}</h1>
            </div>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>
