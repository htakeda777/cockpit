@if(count($galleries))

    <span class="uk-text-small uk-text-uppercase uk-text-muted">@lang('Latest')</span>
    <ul class="uk-list uk-list-line">
        @foreach($galleries as $gallery)
        <li><a href="@route('/galleries/gallery/'.$gallery['_id'])">{{ $gallery["name"] }}</a></li>
        @endforeach
    </ul>

    @hasaccess?("Galleries", 'create.gallery')
    <a class="uk-button uk-button-success uk-button-small" href="@route('/galleries/gallery')" title="@lang('Add gallery')" data-uk-tooltip="{pos:'bottom'}"><i class="uk-icon-plus-circle"></i></a>
    @end
@else

    <div class="uk-text-center">
        <h2><i class="uk-icon-picture-o"></i></h2>
        <p class="uk-text-muted">
            @lang('You don\'t have any galleries created.')
        </p>
        
        @hasaccess?("Galleries", 'create.gallery')
        <a href="@route('/galleries/gallery')" class="uk-button uk-button-success">@lang('Create a gallery')</a>
        @end
    </div>

@endif