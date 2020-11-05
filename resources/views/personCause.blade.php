@extends('layouts.dash')

@section('dashboard')

    <style>
        #uploadRegistration {
            display: none;
        }

        #uploadTeamMembers {
            display: none;
        }

        #file-image {
            display: inline;
            margin: 0 auto .5rem auto;
            width: auto;
            height: auto;
            max-width: 180px;
        }

        #file-image.hidden {
            display: none;
        }

    </style>


    <div class="container">
        <div class="card justify-content-center">
            <h4 class="text-center jumbotron"><strong>Business Idea</strong></h4> <br>
            <form action="/registerIdea" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                style="margin:3%">
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
                        <select class="custom-select my-1 mr-sm-2" id="areYourRegistred" name="areYourRegistred"
                            onchange="getSelectValue()">
                            <option selected>Choose...</option>
                            <option value="yes" id="yes">Yes</option>
                            <option value="no" id="no">No</option>
                        </select>
                    </div>

                </div>

                <div id="uploadRegistration">
                    <div class="form-group row">
                        <label for="registrationProof" class="col-sm-2 col-form-label">
                            <img id="file-image" src="#" alt="Preview" class="hidden">
                            <div id="start">
                                <div>Upload Your proof of registration
                                </div>

                                <span class="text-danger">{{ $errors->first('registrationProof') }}</span>
                            </div>
                        </label>

                        <div class="col-sm-10 custom-file">
                            <div class="file-field">
                                <input type="file" class="form-control" name="registrationProof" id="registrationProof"
                                    accept="image/*" onchange="readURL(this);">
                            </div>

                        </div>
                    </div>
                </div>




                <div class="form-group row">


                    <label for="pjt_desc" class="col-sm-2 col-form-label">do you have a team</label>
                    <div class="col-sm-10">
                        <select class="custom-select my-1 mr-sm-2" name="havingATeam" id="havingATeam" onchange="team()">
                            <option selected>Choose...</option>
                            <option value="iDo" id="iDo">Yes</option>
                            <option value="iDoNot" id="iDoNot">No</option>
                        </select>
                    </div>
                </div>

                <div id="uploadTeamMembers">
                    <div class="form-group row">
                        <label for="pjt_desc" class="col-sm-2 col-form-label">Team members</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="teamContacts" id="pjt_desc"
                                placeholder="Firstname Lastname: 0700 000 000"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pjt_name" class="col-sm-2 col-form-label">Postion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="position" id="position"
                                placeholder="ex: I'm the CEO">
                        </div>
                    </div>
                </div>



                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </form>

        </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        function readURL(input, id) {
            id = id || '#file-image';
            if (input.files & amp; & amp; input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $(id).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
                $('#file-image').removeClass('hidden');
                $('#start').hide();
            }
        }

    </script>
@endsection
