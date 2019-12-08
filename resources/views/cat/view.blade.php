@extends('layouts.dashboard')

@section('content')

<div class="main-page">
        <?php $id = 1; ?>
        <div class="tables">
            <div class="bs-example widget-shadow" data-example-id="contextual-table">
                <h4>Available Post Tags
                    <span class="pull-right">
                        <a href="{{ route('cat.create') }}" class="btn btn-primary btn-sm">Add Tag+</a>
                    </span>
                </h4>
                <div class="table-responsive bs-example widget-shadow">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Tag Name</th>
                             <th>created at</th>
                             <th>#Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)

                        <tr>
                            <th scope="row">{{$id++}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{ date('d-m-y', strtotime($category->created_at))}}</td>
                            <td>
                                    <form action="{{ route('cat.destroy',$category->id)}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button name="submit">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </button>

                                            {{--  <a href="{{url('cat/'.$category->id.'/edit')}}">
                                                    <span class="glyphicon glyphicon-pencil"></span>

                                            </a>  --}}
                                            <a href="/counselling/public/cat/{{$category->id}}/edit">
                                                <span class="glyphicon glyphicon-pencil"></span>

                                        </a>

                                            </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                </div>
            </div>

        </div>
    </div>

@stop



