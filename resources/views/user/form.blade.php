<div>
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        <label for="username"> Enter UserName </label>
        <input type="text" name="username" id="username" />
        <label for="gstin"> Enter GSTIN </label>
        <input type="text" name="gstin" id="gstin" />
        <button type="submit">Submit</button>
    </form>
</div>
