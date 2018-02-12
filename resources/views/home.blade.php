@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Calendario</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id='calendar'></div>

                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        // page is now ready, initialize the calendar...
        $color = 'blue'
        $('#calendar').fullCalendar({
            events: [
                {
                    title: 'My Event',
                    start: '2010-01-01',
                    url: 'http://google.com/'
                }
                // other events here
            ],
            eventClick: function(event) {
                if (event.url) {
                    window.open(event.url);
                    return false;
                }
            }
        });
    });
</script>
@endsection
