@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin: auto">
                <form class="text-left" method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <legend>Form Title</legend>
                    </div>
                    <div class="form-group">
                        <label for="inputTitle">Task title</label>
                        <input type="text"
                               class="form-control"
                               id="inputTitle"
                               name="inputTitle"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="inputContent">Task content</label>
                        <textarea class="form-control"
                                  id="inputContent"
                                  name="inputContent"
                                  rows="3"
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputDueDate">Due Date</label>
                        <input type="date"
                               class="form-control"
                               id="inputDueDate"
                               name="inputDueDate"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">File Name</label>
                        <input type="file"
                               class="form-control-file"
                               id="inputFile"
                               name="inputFile">
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
