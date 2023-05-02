<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Messages</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite([
            'resources/css/app.css',
            'resources/css/news.css'
        ])
    </head>
    <body class="">
        <div class="">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        <a href="{{ url('/logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log out</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @endauth
                </div>
            @endif
            <div  class="bg-white dark:bg-slate-800  px-6 py-8 ring-1 ring-slate-900/5 ">
                <div class="md:container md:mx-auto">
                    <div class="articles-wrp">
                    @foreach ($news as $article)
                        @if ($article->attachments)
                        <div class="article-wrp p-3">
                        
                            <div class="article h-full">
                                @foreach ($article->attachments as $attachment)
                                <div class="thumb"> 
                                    @if (isset($attachment['image_url']))<img alt="{{$attachment["fallback"]}}" src="{{$attachment['image_url']}}">@endif
                                </div>
                                <div class="content h-full w-full flex flex-col place-content-between">
                                    @if ($attachment['title'])
                                    <h2><a target="_blank" href="{{  $attachment['original_url']  }}">{{  $attachment['title']  }}</a></h2>                            
                                    <hr class="my-3"/>
                                    @endif
                                    <div class="flex grow">
                                        <p class="flex-1">{{  $article->ts->format('j F, Y')  }}</p>
                                        <p><a class="link" target="_blank" href="{{  $attachment['original_url']  }}">Read more</a></p></div>
                                    <p><small>{!!  $article->text  !!}</small></p>
                                </div>
                                @endforeach
                            </div>
                        </div>                    
                        @endif
                    @endforeach
                    </div>
                  </div>
              </div>
        </div>
    </body>
</html>
