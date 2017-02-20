@extends('layouts.master')

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">New Task</h1>
        </div>
        <div class="panel-body">
            <!-- Displays if there are Errors -->
            @include('common.errors')
            
            <!-- New Task Form -->
            <form action="/task" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                
                <!-- Task Input Field -->
                <div class="input-group">
                    <input type="text" class="form-control" name="body" id="task-body" placeholder="Enter a Task...">
                    
                    <!-- Add Task Button -->
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Task
                        </button>
                    </span>
                    
                </div>
                
            </form>
            
        </div>
        
    </div>
    
    <!-- Incomplete Tasks List -->
    @if (count($incompleteTasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Incomplete Tasks</h1>
        </div>
        
        <ul class="list-group">
            @foreach ($incompleteTasks as $task)
            <li class="list-group-item">     
                <div class="container-fluid">
                    <div class="row">
                            
                        <!-- Task Name -->
                        <div class="col-xs-7 col-sm-8 col-md-10">{{ $task->body }}</div>
                        
                        <!-- Done Button -->
                        <div class="col-xs-5 col-md-2 text-center">
                            <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    
                                    <button type="submit" class="btn btn-success">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Done
                                    </button>
                            </form>
                        </div>
                            
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <!-- Completed Tasks List -->
    @if (count($completeTasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">Compeleted Tasks</h1>
        </div>
        
        <ul class="list-group">
            @foreach ($completeTasks as $task)
            <li class="list-group-item">     
                <div class="container-fluid">
                    <div class="row">
                            
                        <!-- Task Name -->
                        <div class="col-xs-7 col-sm-8 col-md-10">{{ $task->body }}</div>
                        
                        <!-- Delete Button -->
                        <div class="col-xs-5 col-md-2 text-center">
                            <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    
                                    <button type="submit" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                                    </button>
                            </form>
                        </div>
                            
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    
@endsection