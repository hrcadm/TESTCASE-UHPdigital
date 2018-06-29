@extends('layouts.app')

@section('content')

<div class="panel panel-default homeTable">
    <div class="panel-heading">
        <p>Visitors</p>
    </div>

    <div class="panel-body table-responsive">
        <table class="table hover" id="dataTable">
            <thead>
                <tr>
                    <th>IP</th>
                    <th>Country</th>
                    <th>Is bot</th>
                    <th>Visits</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visitors as $visitor)
                <tr>
                    <td>
                        <img src="{{ $visitor->flag }}" style="width:15px;height: 15px;border-radius: 50%;" alt="flag" />
                        {{ $visitor->ip }}
                    </td>
                    <td>{{ $visitor->country }}</td>
                    <td>
                        @if($visitor->is_bot == 0)
                                No
                            @else
                                Yes
                            @endif
                    </td>
                    <td>{{ $visitor->visits }}</td>
                    <td>
                        <a href="{{ route('show', $visitor->id) }}" class="btn btn-primary btn-xs">Show Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('javascripts')
<script>
    $(document).ready(function() {
        $('#dataTable').dataTable();
    });
</script>
@stop