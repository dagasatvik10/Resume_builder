{!! Form::open() !!}
    <div id="basic_info">
        @include('form._basic_info')
    </div>
    <div id="education">
        @include('form._education')
    </div>
    <div id="objective">
        @include('form._objective')
    </div>
    <div id="personal_details">
        @include('form._personal_details')
    </div>
    <div id="project">
        @include('form._project')
    </div>
    <div id="skill">
        @include('form._skill')
    </div>
    <div id="work_experience">
        @include('form._work_experience')
    </div>
{!! Form::close() !!}