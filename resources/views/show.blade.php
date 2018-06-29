@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:5em;">
    <div class="row" style="text-align: center;">
        <div class="col-12">
            <h4>Visitor data</h4>

            <table class="table table-bordered table-hover mt-5">
                <thead style="border-bottom: 1px solid black;">
                    <tr>
                        <th>IP Address </th>
                        <th>Location (~)</th>
                        <th>Language</th>
                        <th>OS</th>
                        <th>Device</th>
                        <th>Browser</th>
                        <th>Is bot</th>
                        <th>Visits</th>
                        <th>Time on page</th>
                        <th>Last Visit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="{{ $visitor->flag }}" style="width:15px;height: 15px;border-radius: 50%;" alt="flag" />
                            {{ $visitor->ip }}
                        </td>
                        <td>{{ $visitor->location() }}</td>
                        <td>{{ $visitor->lang }}</td>
                        <td>{{ $visitor->os }}</td>
                        <td>{{ $visitor->device }}</td>
                        <td>{{ $visitor->browser }}</td>
                        <td>
                            @if($visitor->is_bot == 0)
                                No
                            @else
                                Yes
                            @endif
                        </td>
                        <td>{{ $visitor->visits }}</td>
                        <td>{{ $visitor->time_on_page }}</td>
                        <td>{{ $visitor->last_visit() }}</td>
                    </tr>
                </tbody>
            </table>

            <a href="{{ URL::previous() }}" class="btn btn-primary btn-xs">Back</a>

        </div>
    </div>
</div>

@endsection