
<form method="GET" action="{{route('user.search')}}">
    <div class="input-group">
      <input type="text" class="form-control" name="recherche" value="{{ request()->recherche ?? '' }}" placeholder="search" aria-label="search" aria-describedby="search">

      <div class="input-group-prepend">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-success btn-icon-text">
            <span class="input-group-text" id="search"> <i class="mdi mdi-magnify"></i> </span>
         </button>
      </div>
    </div>
</form>

