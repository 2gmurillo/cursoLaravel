@csrf
<div id="file">
  <input id="file__input" type="file" hidden="hidden" name="image" accept="image/*">
  <p id="file__text">@lang('Project image')</p>
  <button id="file__button" type="button">@lang('Open')</button>
</div>

<input class="input" type="text" name="title" placeholder="@lang('The project title')"
  value="{{old('title', $project->title)}}">
{!! $errors->first('title', '<p class="error-msg">:message</p>') !!}

<input class="input" type="text" name="url" placeholder="@lang('The project url')"
  value="{{old('url', $project->url)}}">
{!! $errors->first('url', '<p class="error-msg">:message</p>') !!}

<textarea class="textarea" name="description"
  placeholder="@lang('Description')...">{{old('description', $project->description)}}</textarea>
{!! $errors->first('description', '<p class="error-msg">:message</p>') !!}

<button class="button" type="submit">@lang($buttonText)</button>