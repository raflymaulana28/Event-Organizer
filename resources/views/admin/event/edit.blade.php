@extends('layouts.stisla')

@section('title', 'Event Page')

@section('css')
<link rel="stylesheet" href="{{asset('stisla/css/style.css')}}">
<link rel="stylesheet" href="{{asset('stisla/css/components.css')}}">
<link rel="stylesheet" href="{{asset('css/admin/event/edit.css')}}">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Edit Page</h1>
          </div>
          <div class="section-body">
            <div class="jumbotron alas">
                <div class="text-center">
                    <h4>Edit an Event</h4>
                </div>
                <hr class="garis">
                <form action="/admin/events/{{$events->id}}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name_event">Name event</label>
                                <input type="text" class="form-control @error('name_event')is-invalid @enderror" id="name_event" placeholder="Write your Event's name here" name="name_event" autocomplete="off" value="{{$events->name_event}}">
                                @error('name_event')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="quota">Quota</label>
                                <input type="text" class="form-control @error('quota') is-invalid @enderror" id="quota" autocomplete="off" placeholder="Write the quota here" name="quota" value="{{$events->quota}}">
                                @error('quota')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <textarea class="form-control @error('location') is-invalid @enderror" id="location" rows="3" autocomplete="off" placeholder="Write your Events Place here" name="location" value="{{$events->location}}"></textarea>
                                @error('location')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" autocomplete="off" placeholder="Write your Description's name here" name="description" value="{{$events->description}}"></textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date_start">Date Start</label>
                                <input type="date" class="form-control @error('date_start') is-invalid @enderror" id="date_start" name="date_start" autocomplete="off" value="{{$events->date_start}}">
                                @error('date_start')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                           </div>
                            <div class="form-group">
                                <label for="date_finish">Date Finish</label>
                                <input type="date" class="form-control @error('date_finish') is-invalid @enderror" id="date_finish" autocomplete="off" name="date_finish" value="{{$events->date_finish}}">
                                @error('date_finish')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="photo">Add your Event's Photo</label>
                                <input type="file" class="form-control btn btn-primary @error('photo') is-invalid @enderror" id="photo" name="photo" value="{{$events->photo}}">
                                @error('photo')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Edit Now </button>
                    <a href="/admin/events" class="btn btn-md btn-danger">Cancel</a>
                </form>
            </div>
          </div>
        </section>
    </div>
@endsection