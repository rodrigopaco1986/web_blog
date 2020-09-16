@extends('layouts.admin.default')

@section('title', 'Posts')
@section('breadcrumb')
    <div class="breadcrumb float-sm-right">
        <a href="{{ route('posts.create') }}" class="btn btn-block btn-primary">Create</a>
    </div>
@endsection

@section('content')

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>
                            @linkOrder([
                                'title' => 'Title',
                                'name'  => 'title',
                                'url' => route('posts.index', ['sort_by' => 'title', 'sort_dir' => $sd_alt]),
                                'sb' => $sb,
                                'sd' => $sd,
                            ]) 
                            @endlinkOrder
                        </th>
                        <th>
                            @linkOrder([
                                'title' => 'Description',
                                'name'  => 'description',
                                'url' => route('posts.index', ['sort_by' => 'description', 'sort_dir' => $sd_alt]),
                                'sb' => $sb,
                                'sd' => $sd,
                            ]) 
                            @endlinkOrder
                        </th>
                        <th>
                            @linkOrder([
                                'title' => 'Published date',
                                'name'  => 'publication_date',
                                'url' => route('posts.index', ['sort_by' => 'publication_date', 'sort_dir' => $sd_alt]),
                                'sb' => $sb,
                                'sd' => $sd,
                            ]) 
                            @endlinkOrder
                        </th>
                        <th>
                            @linkOrder([
                                'title' => 'Created by',
                                'name'  => 'user_id',
                                'url' => route('posts.index', ['sort_by' => 'user_id', 'sort_dir' => $sd_alt]),
                                'sb' => $sb,
                                'sd' => $sd,
                            ]) 
                            @endlinkOrder
                        </th>
                        <th>
                            @linkOrder([
                                'title' => 'Created at',
                                'name'  => 'created_at',
                                'url' => route('posts.index', ['sort_by' => 'created_at', 'sort_dir' => $sd_alt]),
                                'sb' => $sb,
                                'sd' => $sd,
                            ]) 
                            @endlinkOrder
                        </th>
                        @if(Auth::user()->isAdmin())
                            <th>
                                @linkOrder([
                                    'title' => 'Source',
                                    'name'  => 'source',
                                    'url' => route('posts.index', ['sort_by' => 'source', 'sort_dir' => $sd_alt]),
                                    'sb' => $sb,
                                    'sd' => $sd,
                                ]) 
                                @endlinkOrder
                            </th>
                        @endif
                        <th style="width: 150px"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($paginator as $key => $post)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{!! shortenString(strip_tags($post->description), 15) !!}</td>
                            <td>{{ $post->publication_date }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            @if(Auth::user()->isAdmin())
                                <td>{{ $post->source }}</td>
                            @endif
                            <td>
                                @can('view', $post)
                                <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-default btn-sm" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @endcan
                                @can('update', $post)
                                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-default btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan
                                @can('delete', $post)
                                {!! Form::open(['method'=>'DELETE','route' => ['posts.destroy', 'post' => $post->id],
                                    'style' => 'display:inline', 'class' => 'delete'
                                    ]) !!}
                                    {{ Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-default btn-sm btn-delete', 'title' => 'Eliminar']) }}
                                {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{ (Auth::user()->isAdmin() ? '8' : '7') }}">No records</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
