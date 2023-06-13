@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category
                    <a href="{{url('admin/category')}} " class="btn btn-danger text-white float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="{{$category->name}}" class="border border-primary form-control rounded">
                            @error('name') <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" value="{{$category->slug}}" class="border border-primary form-control rounded">
                            @error('slug') <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="description" class="border border-primary form-control rounded" rows="3">{{$category->description}}</textarea>
                            @error('description') <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="border border-primary form-control rounded">
                            <img src="{{asset('uploads/category/'.$category->image)}}" width="100px" height="100px">
                            @error('image') <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Status</label><br>
                            <input type="checkbox" name="status" {{$category->status=='1'?'checked':''}}>
                        </div>

                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" value="{{$category->meta_title}}" class="border border-primary form-control rounded">
                            @error('meta_title') <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Meta Keyword</label>
                            <textarea name="meta_keyword" value="{{$category->meta_keyword}}" class="border border-primary form-control rounded" rows="3">{{$category->meta_keyword}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" value="{{$category->meta_description}}" class="border border-primary form-control rounded" rows="3">{{$category->meta_description}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-success float-end">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection