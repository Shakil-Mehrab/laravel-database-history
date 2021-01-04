@forelse ($histories as $history)
    <div>
        Change <strong>{{$history->changed_column}}</strong>
        From <strong>{{$history->changed_value_from}}</strong>
        To <strong>{{$history->changed_value_to}}</strong>
        On <strong>{{$history->created_at->toDateTimeString()}}</strong>
    </div><br>
@empty
@endforelse
