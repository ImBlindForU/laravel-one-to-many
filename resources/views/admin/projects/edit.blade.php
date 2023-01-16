@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Modifica il titolo del progetto</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    
                    </div>
                @endif
                <form action="{{ route('admin.project.update',$project->slug) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-group mb-3">
                        <label for="title">Titolo</label>
                        <input  type="text" name="title" id="title" class="form-control" value="{{$project->title}}">   
                    </div>

                    <div class="form-group mb-3">
                        <label for="cover_image">Immagine</label>
                        <input type="file" id="cover_image" name="cover_image" class="form-control">
                         <div class="mt-4" id="image-preview">
                            @if ($project->cover_image)
                                <img class="w-50" src="{{asset('storage/'.$project->cover_image)}}" alt="">
                            @else
                                <p>nessuna immagine</p>
                            @endif
                         </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Contenuto</label>
                        <textarea  value="{{ old('content')  }}" type="text" name="content" id="content" class="form-control" >{{$project->content}}</textarea>
                    </div>

                    <button class="btn btn-warning" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection