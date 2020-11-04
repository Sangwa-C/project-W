@extends('layouts.dash')

@section('dashboard')

    <style>
        #uploadRegistration {
            display: none;
        }

    </style>


    <div class="container">
        <div class="card justify-content-center">
            <h4 class="text-center jumbotron"><strong>Business Idea</strong></h4> <br>
            <form action="/updateUser/{{ Auth::user()->id }}" method="post" accept-charset="utf-8"
                enctype="multipart/form-data" style="margin:3%">
                @csrf

                <div class="form-group row">
                    <label for="pjt_name" class="col-sm-2 col-form-label">Project Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pjt_name" id="pjt_name"
                            placeholder="Your Project Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pjt_desc" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="pjt_desc" id="pjt_desc"
                            placeholder="Describe your project"></textarea>
                    </div>
                </div>

                <div class="form-group row" id="registration">
                    <label for="registration" class="col-sm-2 col-form-label">Is your project registered in RDB</label>
                    <div class="col-sm-10">
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref"
                            onchange="getSelectValue()">
                            <option selected>Choose...</option>
                            <option value="yes" id="yes">Yes</option>
                            <option value="no" id="no">No</option>
                        </select>
                    </div>

                </div>

                <div class="form-group row" id="uploadRegistration">
                    <label for="pjt_desc" class="col-sm-2 col-form-label">Upload Your proof of registration</label>

                    <div class="col-sm-10 custom-file">
                        <div class="file-field">
                            <input type="file" class="form-control">
                        </div>

                    </div>
                </div>


                <div class="form-group row">


                    <label for="pjt_desc" class="col-sm-2 col-form-label">do you have a team</label>
                    <div class="col-sm-10">
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Choose...</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjt_desc" class="col-sm-2 col-form-label">Team members</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="pjt_desc" id="pjt_desc"
                            placeholder="Firstname Lastname: 0700 000 000"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pjt_name" class="col-sm-2 col-form-label">Postion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pjt_name" id="pjt_name" placeholder="ex: I'm the CEO">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>


    </div>
@endsection
