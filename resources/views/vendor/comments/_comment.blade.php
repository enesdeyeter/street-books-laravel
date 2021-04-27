@inject('markdown', 'Parsedown')
@php($markdown->setSafeMode(true))

@if(isset($reply) && $reply === true)
    <div id="comment-{{ $comment->getKey() }}" class="media single-comment">
        @else
            <li id="comment-{{ $comment->getKey() }}" class="media single-comment">
                @endif
                <div class="symbol symbol-light-success symbol-70 mr-5">
                    <span class="symbol-label font-size-h1 text-success font-weight-bold text-uppercase">{{ substr($comment->commenter->name,0,1) }}</span>
                </div>

                <div class="media-body">
                    <h5 class="mt-0 mb-5">{{ $comment->commenter->name ?? $comment->guest_name }} <small class="text-muted" data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $comment->created_at }}">- {{ $comment->created_at->diffForHumans() }}</small></h5>
                    <div style="white-space: pre-wrap;">{!! $markdown->line($comment->comment) !!}</div>

                    <hr>
                    <div class="mb-0">
                        @can('reply-to-comment', $comment)
                            <button data-toggle="modal" data-target="#reply-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-text-primary btn-hover-light-primary font-weight-bold text-uppercase">Cevapla</button>
                        @endcan
                        @can('edit-comment', $comment)
                            <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-text-warning btn-hover-light-warning font-weight-bold text-uppercase">Düzenle</button>
                        @endcan
                        @can('delete-comment', $comment)
                            <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-text-danger btn-hover-light-danger font-weight-bold text-uppercase">Sil</a>
                            <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        @endcan
                    </div>

                    @can('edit-comment', $comment)
                        <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Düzenle</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="message">Görüşünüzü yazınız:</label>
                                                <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                                <small class="form-text text-muted">kısayollar için <a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a></small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">İptal</button>
                                            <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Kaydet</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @can('reply-to-comment', $comment)
                        <div class="modal fade" id="reply-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Görüşü Cevapla</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="message">Kitap hakkındaki görüşünüzü buraya giriniz:</label>
                                                <textarea required class="form-control" name="message" rows="5"></textarea>
                                                <small class="form-text text-muted">kısayollar için <a target="_blank" href="https://help.github.com/articles/basic-writing-and-formatting-syntax">Markdown</a></small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">İptal</button>
                                            <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Cevapla</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endcan

                    {{-- Recursion for children --}}
                    @if($grouped_comments->has($comment->getKey()))
                        @foreach($grouped_comments[$comment->getKey()] as $child)
                            @include('comments::_comment', [
                                'comment' => $child,
                                'reply' => true,
                                'grouped_comments' => $grouped_comments
                            ])
                        @endforeach
                    @endif

                </div>
            @if(isset($reply) && $reply === true)
    </div>
    @else
    </li>
@endif
