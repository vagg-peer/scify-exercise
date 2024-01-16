@extends('layouts.master')

@section('title', "User's Activity")

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Assistive Technologies</a></li>
    <li class="breadcrumb-item active" aria-current="page">User's Activity</li>
  </ol>
</nav>
<div class="users-activity-layout text-center">
<h3 class="mt-3">User's Activity</h3>
    @if($data)
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover mt-3">
                <thead>    
                    <tr>
                        <th scope="col">{{ $data[0][0] ? $data[0][0] : '-' }}</th>
                        <th scope="col">{{ $data[0][1] ? $data[0][1] : '-' }}</th>
                        <th scope="col">{{ $data[0][2] ? $data[0][2] : '-' }}</th>
                        <th scope="col">{{ $data[0][3] ? $data[0][3] : '-' }}</th>
                        <th scope="col">{{ $data[0][4] ? $data[0][4] : '-' }}</th>
                    </tr>
                </thead>
                @php
                    unset($data[0]);
                @endphp
                <tbody>
                    @foreach( $data as $row )
                        @if ($row[1] != 'Memor-i' && $row[1] != 'dianoia'  )
                            @continue
                        @endif    
                        <tr>
                            <td>{{ $row[0] ? $row[0] : '-' }}</td>
                            <td>{{ $row[1] ? $row[1] : '-' }}</td>
                            <td>{{ $row[2] ? $row[2] : '-' }}</td>
                            <td>{{ $row[3] ? $row[3] : '-' }}</td>
                            <td>{{ $row[4] ? $row[4] : '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>There is a problem with the file. Please try again later.</p>
    @endif
</div>

@stop