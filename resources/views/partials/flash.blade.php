@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert_important' : ''}}">
      @if (Session::has('flash_message_important'))
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      @endif
      {{ Session::get('flash_message') }}
    </div>
@endif
