@extends('admin.main')
@push('styles')
@endpush
@push('scripts')
    <script>
        $("#upload").change(function() {
            const form = new FormData();
            form.append("file", $(this)[0].files[0]);
            console.log(form);
            $.ajax({
                processData: false,
                contentType: false,
                type: "POST",
                data: form,
                url: "/api/upload",
                success: function(response) {
                    if (response.status == 0) {
                        //hiển thị gif
                        $("#image_show").attr('src', response.url);
                        $("#video").val(response.url);
                    } else {
                        console.log(response.message);
                    }
                },
            });
        });
        $(document).on('click', '.btn-delete', function() {
            if (confirm('Do you want to delete?')) {
                let id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    data: {
                        id: id
                    },
                    url: '{{ route('videos.destroy') }}',
                    success: function(response) {
                        if (response.status == 0) {
                            location.reload();
                        } else {
                            toastr.error(response.message, 'Fail');
                        }
                    },
                });
            }
        });
    </script>
@endpush
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Video</li>
                </ol>
            </nav>
            <h2 class="h4">Videos</h2>
            <p class="mb-0">Edit the video</p>
        </div>
    </div>
    <form action="{{ route('videos.update', ['id' => $video->id]) }}" method="POST">
        @csrf
        <div wire:key="setting-favicon_icon" class="card card-body border-0 shadow mb-4">
            <h2 class="h4">Video</h2>
            <div class="row mb-4">
                <div class="col-lg-6 col-sm-6 col-xs-12 box-input-image">
                    <div class="preview-image my-3">
                        <img src="{{ $video->link }}" alt="Video" id="image_show" style="width: 100px;height:100px">
                    </div>
                    <div class="upload_a_photo">
                        <input accept=".gif" type="file" id="upload" class="form-control form-upload-image">
                    </div>
                    <input type="hidden" name="link" id="video" value="{{ $video->link }}" />
                </div>
            </div>
            <h2 class="h4">Active</h2>
            <div class="row mb-4">
                <div class="col-lg-3 col-sm-3 col-xs-12 box-input-image">
                    <label for="active">Yes</label>
                    <input type="radio" name="active" id="active" value="1"
                        {{ $video->active == 1 ? 'checked' : '' }} />
                </div>
                <div class="col-lg-3 col-sm-3 col-xs-12 box-input-image">
                    <label for="inactive">No</label>
                    <input type="radio" name="active" id="inactive" value="0"
                        {{ $video->active == 0 ? 'checked' : '' }} />
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
        </div>
    </form>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Link</th>
                    <th class="border-gray-200">Content</th>
                    <th class="border-gray-200">Active</th>
                    <th class="border-gray-200">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($videos->isNotEmpty())
                    @foreach ($videos as $video)
                        <tr>
                            <td>
                                <span class="fw-normal">{{ $video->id }}</span>
                            </td>
                            <td>
                                <span class="fw-normal">{{ $video->link }}</span>
                            </td>
                            <td><span class="fw-normal"><img style="width: 100px;height:100px" src="{{ $video->link }}"
                                        alt=""></span></td>
                            <td>
                                <span
                                    class="fw-bold @if ($video->active == 1) text-success @else text-warning @endif">
                                    @if ($video->active == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('videos.show', ['id' => $video->id]) }}" class="btn btn-info">Edit</a>
                                @if (request()->id != $video->id)
                                    <button data-id="{{ $video->id }}" type="submit"
                                        class="btn btn-secondary btn-delete">Delete</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="text-center">No records</td>
                    </tr>
                @endif
            </tbody>
        </table>

        <div style="padding-right:0" class="card-footer pt-4 border-0 d-flex align-items-center justify-content-start">
            {{ $videos->links() }}
        </div>
    </div>
@endsection
