

    <div class="row col s8">
        <div class="input-field col s4">
            {!! Form::text('address',null,array(
                'id' => 'address',
                'class' => 'validate'
            )) !!}
        <label for="address">Address:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('phone_num',null,array(
                'id' => 'phone_num',
                'class' => 'validate'
            )) !!}
            <label for="phone_num">Phone Number:</label>
        </div>
    </div>
    <div class="row col s8">
        <div class="input-field col s4">
            {!! Form::text('father_name',null,array(
                'id' => 'father_name',
                'class' => 'validate'
            )) !!}
            <label for="father_name">Father's Name:</label>
        </div>
        <div class="input-field col s4">
            {!! Form::text('country',null,array(
                'id'=>'country',
                'class' => 'validate'
            )) !!}
            <label for="country">Country:</label>
        </div>
    </div>
