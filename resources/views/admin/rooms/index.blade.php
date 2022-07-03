@extends('admin.layouts.layout')

@section('content')
    <div class="content">
        @include('admin.layouts._navbar')

        @include('admin.layouts.alerts._success')

        <div class="card mb-3">
            <div class="card-body">
                <div class="row flex-between-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">{{ __('Налаштування кімнат') }}</h5>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('rooms.create')}}" class="btn btn-success me-1 mb-1">{{ __('Додати') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0">{{ __('Всі кімнати') }}</h5>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light">
                @if ($rooms->isNotEmpty())
                    <div id="tableExample2" data-list='{"valueNames":["id", "title", "slug", "preview_image"],"page":15,"pagination":true}'>
                        <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort" data-sort="id">ID</th>
                                    <th class="sort" data-sort="title">{{ __('Назва') }}</th>
                                    <th class="sort" data-sort="slug">{{ __('Слаг') }}</th>
                                    <th class="sort" data-sort="preview_image">{{ __('Картинка') }}</th>
                                    <th class="sort">Дії</th>
                                </tr>
                                </thead>
                                <tbody class="list" style="vertical-align: middle">

                                @foreach($rooms as $room)

                                {{--@dd($room)--}}
                                {{--{{ $room->gallery()->where('room_id', $room->id)->get() }}--}}

                                    <tr>
                                        <td class="id">{{ $room->id }}</td>
                                        <td class="title">{{ $room->title }}</td>
                                        <td class="slug">{{ $room->slug }}</td>
                                        <td class="preview_image">
                                            <img src="{{ $room->getImage() }}" style="width: 100%;max-width: 100px" alt="">
                                        </td>
                                        <td class="actions">
                                            <div class="actions-btn">
                                                <a class="btn p-0" href="{{route('rooms.edit', $room->id)}}">
                                                    <span class="far fa-edit"></span>
                                                </a>

                                                {{Form::open(['route'=> ['rooms.destroy', $room->id], 'method' => 'delete'])}}
                                                <button class="btn p-0 delete-btn" type="submit">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                                {{Form::close()}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul>
                            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                        </div>
                    </div>
                @else
                    <h6 style="text-align: center">{{ __('Нічого не знайдено') }}</h6>
                @endif
            </div>
        </div>

    </div>
@endsection
