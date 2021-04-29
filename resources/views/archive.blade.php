@extends('layouts.app-inner')
@section('content')

  <div class="page__description">

    {!! get_the_archive_description() !!}

    @if ( is_category(5) )
      <div class="page__snowflakes">
        <svg class="page__snowflake"  preserveAspectRatio="xMidYMid meet" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" role="img">
            <g>
                <path fill="#5EB6B4" d="M180 98.009h-13.809l7.343-7.039-2.755-2.874-10.341 9.913h-15.707l18.715-17.938-2.756-2.874-21.712 20.812h-34.172l23.349-23.349 29.98-.548-.072-3.981-25.851.473 11.097-11.098 14.264-.26-.073-3.981-10.135.185 10.611-10.611-2.815-2.815-10.635 10.635.216-10.181-3.981-.084-.303 14.334-11.098 11.097.548-25.912-3.98-.084-.637 30.065-23.3 23.3V62.172l20.811-21.585-2.867-2.764-17.944 18.612V40.742l9.902-10.269-2.867-2.764-7.035 7.296V20h-3.982v15.04l-7.045-7.351-2.875 2.755 9.92 10.349v15.695L80.075 37.777 77.2 40.532l20.809 21.709v32.953L73.761 70.945l-.55-29.995-3.98.073.473 25.866-11.089-11.09-.262-14.294-3.981.073.186 10.165-9.719-9.719-2.814 2.815 9.711 9.712-10.151-.215-.084 3.98 14.304.304L66.91 69.725l-25.897-.549-.084 3.981 30.05.636 24.216 24.216H60.901L39.303 77.188l-2.764 2.866 18.625 17.955H39.481l-10.292-9.923-2.764 2.867 7.319 7.056H20v3.982h13.733l-7.328 7.025 2.755 2.875 10.328-9.9h15.704l-18.699 17.923 2.756 2.875 21.699-20.798h34.246l-24.621 24.622-30.45.558.073 3.98 26.32-.481-11.089 11.089-14.749.27.072 3.981 10.62-.194-9.345 9.345 2.814 2.815 8.875-8.875-.205 9.696 3.981.084.293-13.849 11.105-11.106-.538 25.443 3.98.084.627-29.595 25.052-25.052v34.821l-21.137 21.925 2.868 2.763 18.269-18.95v15.682l-10.237 10.619 2.867 2.764 7.37-7.645V180h3.982v-12.55l6.709 7 2.875-2.756-9.584-9.999v-15.704l17.609 18.37 2.875-2.756-20.484-21.369v-35.43l24.216 24.215.549 29.976 3.981-.072-.474-25.847 11.09 11.089.262 14.275 3.98-.072-.186-10.146 9.752 9.752 2.815-2.815-9.765-9.765 10.171.215.084-3.98-14.323-.303-11.106-11.106 25.917.549.084-3.98-30.07-.638-24.162-24.162h34.249l21.581 20.808 2.764-2.867-18.61-17.941h15.684l10.276 9.909 2.764-2.867-7.305-7.042H180v-3.982z"></path>
            </g>
        </svg>

        <svg class="page__snowflake"  preserveAspectRatio="xMidYMid meet" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" role="img">
            <g>
                <path fill="#5EB6B4" d="M180 98.009h-13.809l7.343-7.039-2.755-2.874-10.341 9.913h-15.707l18.715-17.938-2.756-2.874-21.712 20.812h-34.172l23.349-23.349 29.98-.548-.072-3.981-25.851.473 11.097-11.098 14.264-.26-.073-3.981-10.135.185 10.611-10.611-2.815-2.815-10.635 10.635.216-10.181-3.981-.084-.303 14.334-11.098 11.097.548-25.912-3.98-.084-.637 30.065-23.3 23.3V62.172l20.811-21.585-2.867-2.764-17.944 18.612V40.742l9.902-10.269-2.867-2.764-7.035 7.296V20h-3.982v15.04l-7.045-7.351-2.875 2.755 9.92 10.349v15.695L80.075 37.777 77.2 40.532l20.809 21.709v32.953L73.761 70.945l-.55-29.995-3.98.073.473 25.866-11.089-11.09-.262-14.294-3.981.073.186 10.165-9.719-9.719-2.814 2.815 9.711 9.712-10.151-.215-.084 3.98 14.304.304L66.91 69.725l-25.897-.549-.084 3.981 30.05.636 24.216 24.216H60.901L39.303 77.188l-2.764 2.866 18.625 17.955H39.481l-10.292-9.923-2.764 2.867 7.319 7.056H20v3.982h13.733l-7.328 7.025 2.755 2.875 10.328-9.9h15.704l-18.699 17.923 2.756 2.875 21.699-20.798h34.246l-24.621 24.622-30.45.558.073 3.98 26.32-.481-11.089 11.089-14.749.27.072 3.981 10.62-.194-9.345 9.345 2.814 2.815 8.875-8.875-.205 9.696 3.981.084.293-13.849 11.105-11.106-.538 25.443 3.98.084.627-29.595 25.052-25.052v34.821l-21.137 21.925 2.868 2.763 18.269-18.95v15.682l-10.237 10.619 2.867 2.764 7.37-7.645V180h3.982v-12.55l6.709 7 2.875-2.756-9.584-9.999v-15.704l17.609 18.37 2.875-2.756-20.484-21.369v-35.43l24.216 24.215.549 29.976 3.981-.072-.474-25.847 11.09 11.089.262 14.275 3.98-.072-.186-10.146 9.752 9.752 2.815-2.815-9.765-9.765 10.171.215.084-3.98-14.323-.303-11.106-11.106 25.917.549.084-3.98-30.07-.638-24.162-24.162h34.249l21.581 20.808 2.764-2.867-18.61-17.941h15.684l10.276 9.909 2.764-2.867-7.305-7.042H180v-3.982z"></path>
            </g>
        </svg>

        <svg class="page__snowflake"  preserveAspectRatio="xMidYMid meet" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" role="img">
            <g>
                <path fill="#5EB6B4" d="M180 98.009h-13.809l7.343-7.039-2.755-2.874-10.341 9.913h-15.707l18.715-17.938-2.756-2.874-21.712 20.812h-34.172l23.349-23.349 29.98-.548-.072-3.981-25.851.473 11.097-11.098 14.264-.26-.073-3.981-10.135.185 10.611-10.611-2.815-2.815-10.635 10.635.216-10.181-3.981-.084-.303 14.334-11.098 11.097.548-25.912-3.98-.084-.637 30.065-23.3 23.3V62.172l20.811-21.585-2.867-2.764-17.944 18.612V40.742l9.902-10.269-2.867-2.764-7.035 7.296V20h-3.982v15.04l-7.045-7.351-2.875 2.755 9.92 10.349v15.695L80.075 37.777 77.2 40.532l20.809 21.709v32.953L73.761 70.945l-.55-29.995-3.98.073.473 25.866-11.089-11.09-.262-14.294-3.981.073.186 10.165-9.719-9.719-2.814 2.815 9.711 9.712-10.151-.215-.084 3.98 14.304.304L66.91 69.725l-25.897-.549-.084 3.981 30.05.636 24.216 24.216H60.901L39.303 77.188l-2.764 2.866 18.625 17.955H39.481l-10.292-9.923-2.764 2.867 7.319 7.056H20v3.982h13.733l-7.328 7.025 2.755 2.875 10.328-9.9h15.704l-18.699 17.923 2.756 2.875 21.699-20.798h34.246l-24.621 24.622-30.45.558.073 3.98 26.32-.481-11.089 11.089-14.749.27.072 3.981 10.62-.194-9.345 9.345 2.814 2.815 8.875-8.875-.205 9.696 3.981.084.293-13.849 11.105-11.106-.538 25.443 3.98.084.627-29.595 25.052-25.052v34.821l-21.137 21.925 2.868 2.763 18.269-18.95v15.682l-10.237 10.619 2.867 2.764 7.37-7.645V180h3.982v-12.55l6.709 7 2.875-2.756-9.584-9.999v-15.704l17.609 18.37 2.875-2.756-20.484-21.369v-35.43l24.216 24.215.549 29.976 3.981-.072-.474-25.847 11.09 11.089.262 14.275 3.98-.072-.186-10.146 9.752 9.752 2.815-2.815-9.765-9.765 10.171.215.084-3.98-14.323-.303-11.106-11.106 25.917.549.084-3.98-30.07-.638-24.162-24.162h34.249l21.581 20.808 2.764-2.867-18.61-17.941h15.684l10.276 9.909 2.764-2.867-7.305-7.042H180v-3.982z"></path>
            </g>
        </svg>
      </div>
    @endif


  </div>

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-archive' )

  @endwhile

@endsection