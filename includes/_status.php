<?php

?>


<details class="js-user-status-details details-reset details-overlay details-overlay-dark">
    <summary class="btn-link btn-block link-gray no-underline js-toggle-user-status-edit toggle-user-status-edit "
             role="menuitem">
        <div class="d-flex flex-items-center flex-items-stretch">
            <div class="f6 lh-condensed user-status-header d-flex user-status-emoji-only-header circle">
                <div class="user-status-emoji-container flex-shrink-0 mr-2 d-flex flex-items-center flex-justify-center lh-condensed-ultra v-align-bottom">
                    <div>
                        <g-emoji class="g-emoji" alias="house"
                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">??
                        </g-emoji>
                    </div>
                </div>
            </div>
            <div class="
          
           user-status-message-wrapper f6 min-width-0"
                 style="line-height: 20px;">
                <div class="css-truncate css-truncate-target width-fit text-gray-dark text-left">
                    <span>Working from home</span>
                </div>
            </div>
        </div>
    </summary>
    <details-dialog class="details-dialog rounded-1 anim-fade-in fast Box Box--overlay" role="dialog" tabindex="-1">
        <!-- '"` --><!-- </textarea></xmp> --></option></form>
        <form class="position-relative flex-auto js-user-status-form"
              action="/users/status?circle=0&amp;compact=1&amp;link_mentions=0&amp;truncate=1" accept-charset="UTF-8"
              method="post"><input type="hidden" name="_method" value="put"/><input type="hidden"
                                                                                    name="authenticity_token"
                                                                                    value="7VuQicTJAB1cCGtBEJPvQmGKPbaQuM7P3UY0WkdJA1sw6a6qwNS49x6PVRMus+YsBAAzq119la8uAqBg/z9HCw=="/>
            <div class="Box-header bg-gray border-bottom p-3">
                <button class="Box-btn-octicon js-toggle-user-status-edit btn-octicon float-right" type="reset"
                        aria-label="Close dialog" data-close-dialog>
                    <svg class="octicon octicon-x" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                         aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path>
                    </svg>
                </button>
                <h3 class="Box-title f5 text-bold text-gray-dark">Edit status</h3>
            </div>
            <input type="hidden" name="emoji" class="js-user-status-emoji-field" value=":house:">
            <input type="hidden" name="organization_id" class="js-user-status-org-id-field" value="">
            <div class="px-3 py-2 text-gray-dark">
                <div class="js-characters-remaining-container position-relative mt-2">
                    <div class="input-group d-table form-group my-0 js-user-status-form-group">
              <span class="input-group-button d-table-cell v-align-middle" style="width: 1%">
                <button type="button" aria-label="Choose an emoji"
                        class="btn-outline btn js-toggle-user-status-emoji-picker btn-open-emoji-picker p-0">
                  <span class="js-user-status-original-emoji" hidden><div><g-emoji class="g-emoji" alias="house"
                                                                                   fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">??</g-emoji></div></span>
                  <span class="js-user-status-custom-emoji"><div><g-emoji class="g-emoji" alias="house"
                                                                          fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">??</g-emoji></div></span>
                  <span class="js-user-status-no-emoji-icon" hidden>
                    <svg class="octicon octicon-smiley" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                         aria-hidden="true"><path fill-rule="evenodd"
                                                  d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zM5 8a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zM5.32 9.636a.75.75 0 011.038.175l.007.009c.103.118.22.222.35.31.264.178.683.37 1.285.37.602 0 1.02-.192 1.285-.371.13-.088.247-.192.35-.31l.007-.008a.75.75 0 111.222.87l-.614-.431c.614.43.614.431.613.431v.001l-.001.002-.002.003-.005.007-.014.019a1.984 1.984 0 01-.184.213c-.16.166-.338.316-.53.445-.63.418-1.37.638-2.127.629-.946 0-1.652-.308-2.126-.63a3.32 3.32 0 01-.715-.657l-.014-.02-.005-.006-.002-.003v-.002h-.001l.613-.432-.614.43a.75.75 0 01.183-1.044h.001z"></path></svg>
                  </span>
                </button>
              </span>
                        <text-expander keys=": @" data-mention-url="/autocomplete/user-suggestions"
                                       data-emoji-url="/autocomplete/emoji">
                            <input
                                    type="text"
                                    autocomplete="off"
                                    data-no-org-url="/autocomplete/user-suggestions"
                                    data-org-url="/suggestions?mention_suggester=1"
                                    data-maxlength="80"
                                    class="d-table-cell width-full form-control js-user-status-message-field js-characters-remaining-field"
                                    placeholder="What's happening?"
                                    name="message"
                                    value="Working from home"
                                    aria-label="What is your current status?">
                        </text-expander>
                        <div class="error">Could not update your status, please try again.</div>
                    </div>
                    <div style="margin-left: 53px"
                         class="my-1 text-small label-characters-remaining js-characters-remaining"
                         data-suffix="remaining" hidden>
                        80 remaining
                    </div>
                </div>
                <include-fragment class="js-user-status-emoji-picker" data-url="/users/status/emoji"></include-fragment>
                <div class="overflow-auto ml-n3 mr-n3 px-3 border-bottom" style="max-height: 33vh">
                    <div class="user-status-suggestions js-user-status-suggestions collapsed overflow-hidden">
                        <h4 class="f6 text-normal my-3">Suggestions:</h4>
                        <div class="mx-3 mt-2 clearfix">
                            <div class="float-left col-6">
                                <button type="button" value=":palm_tree:"
                                        class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                                    <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                                        <g-emoji alias="palm_tree"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f334.png">
                                            ??
                                        </g-emoji>
                                    </div>
                                    <div class="d-flex flex-items-center no-underline js-predefined-user-status-message ws-normal text-left"
                                         style="border-left: 1px solid transparent">
                                        On vacation
                                    </div>
                                </button>
                                <button type="button" value=":face_with_thermometer:"
                                        class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                                    <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                                        <g-emoji alias="face_with_thermometer"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f912.png">
                                            ??
                                        </g-emoji>
                                    </div>
                                    <div class="d-flex flex-items-center no-underline js-predefined-user-status-message ws-normal text-left"
                                         style="border-left: 1px solid transparent">
                                        Out sick
                                    </div>
                                </button>
                            </div>
                            <div class="float-left col-6">
                                <button type="button" value=":house:"
                                        class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                                    <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                                        <g-emoji alias="house"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3e0.png">
                                            ??
                                        </g-emoji>
                                    </div>
                                    <div class="d-flex flex-items-center no-underline js-predefined-user-status-message ws-normal text-left"
                                         style="border-left: 1px solid transparent">
                                        Working from home
                                    </div>
                                </button>
                                <button type="button" value=":dart:"
                                        class="d-flex flex-items-baseline flex-items-stretch lh-condensed f6 btn-link link-gray no-underline js-predefined-user-status mb-1">
                                    <div class="emoji-status-width mr-2 v-align-middle js-predefined-user-status-emoji">
                                        <g-emoji alias="dart"
                                                 fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f3af.png">
                                            ??
                                        </g-emoji>
                                    </div>
                                    <div class="d-flex flex-items-center no-underline js-predefined-user-status-message ws-normal text-left"
                                         style="border-left: 1px solid transparent">
                                        Focusing
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="user-status-limited-availability-container">
                        <div class="form-checkbox my-0">
                            <input type="checkbox" name="limited_availability" value="1"
                                   class="js-user-status-limited-availability-checkbox"
                                   data-default-message="I may be slow to respond."
                                   aria-describedby="limited-availability-help-text-truncate-true-compact-true"
                                   id="limited-availability-truncate-true-compact-true">
                            <label class="d-block f5 text-gray-dark mb-1"
                                   for="limited-availability-truncate-true-compact-true">
                                Busy
                            </label>
                            <p class="note" id="limited-availability-help-text-truncate-true-compact-true">
                                When others mention you, assign you, or request your review,
                                GitHub will let them know that you have limited availability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-inline-block f5 mr-2 pt-3 pb-2">
                    <div class="d-inline-block mr-1">
                        Clear status
                    </div>

                    <details
                            class="js-user-status-expire-drop-down f6 dropdown details-reset details-overlay d-inline-block mr-2">
                        <summary class="f5 btn-link link-gray-dark border px-2 py-1 rounded-1" aria-haspopup="true">
                            <div class="js-user-status-expiration-interval-selected d-inline-block v-align-baseline">
                                Never
                            </div>
                            <div class="dropdown-caret"></div>
                        </summary>

                        <ul class="dropdown-menu dropdown-menu-se pl-0 overflow-auto"
                            style="width: 220px; max-height: 15.5em">
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item js-user-status-expire-button ws-normal"
                                        title="Never">
                                    <span class="d-inline-block text-bold mb-1">Never</span>
                                    <div class="f6 lh-condensed">Keep this status until you clear your status or edit
                                        your status.
                                    </div>
                                </button>
                            </li>
                            <li class="dropdown-divider" role="none"></li>
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item ws-normal js-user-status-expire-button"
                                        title="in 30 minutes" value="2020-06-26T12:40:09-05:00">
                                    in 30 minutes
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item ws-normal js-user-status-expire-button"
                                        title="in 1 hour" value="2020-06-26T13:10:09-05:00">
                                    in 1 hour
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item ws-normal js-user-status-expire-button"
                                        title="in 4 hours" value="2020-06-26T16:10:09-05:00">
                                    in 4 hours
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item ws-normal js-user-status-expire-button"
                                        title="today" value="2020-06-26T23:59:59-05:00">
                                    today
                                </button>
                            </li>
                            <li>
                                <button type="button"
                                        class="btn-link dropdown-item ws-normal js-user-status-expire-button"
                                        title="this week" value="2020-06-28T23:59:59-05:00">
                                    this week
                                </button>
                            </li>
                        </ul>
                    </details>
                    <input class="js-user-status-expiration-date-input" type="hidden" name="expires_at" value="">
                </div>

                <include-fragment class="js-user-status-org-picker"
                                  data-url="/users/status/organizations"></include-fragment>
            </div>
            <div class="d-flex flex-items-center flex-justify-between p-3 border-top">
                <button type="submit" class="width-full btn btn-primary mr-2 js-user-status-submit">
                    Set status
                </button>
                <button type="button" class="width-full js-clear-user-status-button btn ml-2 js-user-status-exists">
                    Clear status
                </button>
            </div>
        </form>
    </details-dialog>
</details>