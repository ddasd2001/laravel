</div>

    <form method="POST" action="{{ route('test.store') }}">
        {{ csrf_field() }}
    <td ><input type="text" name="name" class="form-control" value="{{ old('gameid') }}"></td>
    <td ><input type="text" name="name" class="form-control" value="{{ old('userid') }}"></td>
    <td ><input type="text" name="name" class="form-control" value="{{ old('code') }}"></td>
    <td ><input type="text" name="name" class="form-control" value="{{ old('score') }}"></td>
    <td ><input type="text" name="name" class="form-control" value="{{ old('gametime') }}"></td>
    <td ><input type="text" name="name" class="form-control" value="{{ old('msec') }}"></td>
    <td><button type="submit" class="btn btn-primary">新插入</button></td>
    </form>
</div>