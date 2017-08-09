    <div class="form-group">
        <label>Name</label>
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label>Tit</label>
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        <p class="help-block">Loại mặt hàng</p>
    </div>

    <div class="form-group">
        <label>Price</label>
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label>Discount</label>
        {!! Form::text('discount', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label>Description</label>
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label>Status</label>
        {{--{!! Form::select('status', $product, null , ['class' => 'form-control']) !!}--}}
        <select name="status">
            <option value="enable">Enable</option>
            <option value="disable">Disable</option>
        </select>
    </div>

    <div class="form-group">
        <label>Thumbanil</label>
        {!! Form::file('thumbnail', null, ['class' => 'form-control']) !!}
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-success">Reset</button>