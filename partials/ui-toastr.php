<?php
include "../partials/_dbconnect.php";

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}
session_abort();
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assests/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assests/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assests/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assests/src/plugins/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />
    <link rel="stylesheet" href="../assests/src/plugins/toastr/toastr.css">
    <script src="../assests/src/scripts/jquery.min.js"></script>
    <script src="../assests/src/plugins/toastr/toastr.js"></script>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <?php include '../partials/_navbar.php' ?>

    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="controls">
                                <div class="form-group">
                                    <label class="control-label" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter a title ..." />
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="weight-600"></label>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="closeButton-1" value="checked">
                                    <label class="custom-control-label" for="closeButton-1">Close Button</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="addBehaviorOnToastClick-1" value="checked">
                                    <label class="custom-control-label" for="addBehaviorOnToastClick-1">Add behavior on toast click</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="addBehaviorOnToastCloseClick-1" value="checked">
                                    <label class="custom-control-label" for="addBehaviorOnToastCloseClick-1">Add behavior on toast close button click</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="debugInfo-1" value="checked">
                                    <label class="custom-control-label" for="debugInfo-1">Debug</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="progressBar-1" value="checked">
                                    <label class="custom-control-label" for="progressBar-1">Progress Bar</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="rtl-1" value="checked">
                                    <label class="custom-control-label" for="rtl-1">Right-To-Left</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="preventDuplicates-1" value="checked">
                                    <label class="custom-control-label" for="preventDuplicates-1">Prevent Duplicates</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="addClear-1" value="checked">
                                    <label class="custom-control-label" for="addClear-1">Add button to force clearing a toast, ignoring focus</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-5">
                                    <input type="checkbox" class="custom-control-input" id="newestOnTop-1" value="checked">
                                    <label class="custom-control-label" for="newestOnTop-1">Newest on top</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="control-group" id="toastTypeGroup">
                                <label class="weight-600">Toast Type</label>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="Success" name="toasts" class="custom-control-input" value="success" checked>
                                    <label class="custom-control-label" for="Success">Success</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="Info" name="toasts" class="custom-control-input" value="info">
                                    <label class="custom-control-label" for="Info">Info</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="Warning" name="toasts" class="custom-control-input" value="warning">
                                    <label class="custom-control-label" for="Warning">Warning</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="error" name="toasts" class="custom-control-input" value="error">
                                    <label class="custom-control-label" for="error">Error</label>
                                </div>
                            </div>
                            <div class="control-group" id="positionGroup">
                                <label class="weight-600">Position</label>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="1" name="positions" class="custom-control-input" value="toast-top-right" checked>
                                    <label class="custom-control-label" for="1">Top Right</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="2" name="positions" class="custom-control-input" value="toast-bottom-right">
                                    <label class="custom-control-label" for="2">Bottom Right</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="3" name="positions" class="custom-control-input" value="toast-bottom-left">
                                    <label class="custom-control-label" for="3">Bottom Left</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="4" name="positions" class="custom-control-input" value="toast-top-left">
                                    <label class="custom-control-label" for="4">Top Left</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="5" name="positions" class="custom-control-input" value="toast-top-full-width">
                                    <label class="custom-control-label" for="5">Top Full Width</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="6" name="positions" class="custom-control-input" value="toast-bottom-full-width">
                                    <label class="custom-control-label" for="6">Botton Full Width</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="7" name="positions" class="custom-control-input" value="toast-top-center">
                                    <label class="custom-control-label" for="7">Top Center</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="8" name="positions" class="custom-control-input" value="toast-bottom-center">
                                    <label class="custom-control-label" for="8">Bottom Center</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Show Easing</label>
                                    <input type="text" class="form-control" id="showEasing" placeholder="swing, linear" value="swing" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Hide Easing</label>
                                    <input type="text" class="form-control" id="hideEasing" placeholder="swing, linear" value="linear" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Show Method</label>
                                    <input type="text" class="form-control" id="showMethod" placeholder="show, fadeIn, slideDown" value="fadeIn" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Hide Method</label>
                                    <input type="text" class="form-control" id="hideMethod" placeholder="hide, fadeOut, slideUp" value="fadeOut" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="title">Show Duration</label>
                                    <input type="number" class="form-control" id="showDuration" placeholder="ms" value="300" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Hide Duration</label>
                                    <input type="number" class="form-control" id="hideDuration" placeholder="ms" value="1000" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Time out</label>
                                    <input type="number" class="form-control" id="timeOut" placeholder="ms" value="5000" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="title">Extended time out</label>
                                    <input type="number" class="form-control" id="extendedTimeOut" placeholder="ms" value="1000" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary" id="showtoast">Show Toast</button>
                            <button type="button" class="btn btn-danger" id="cleartoasts">Clear Toasts</button>
                            <button type="button" class="btn btn-danger" id="clearlasttoast">Clear Last Toast</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assests/vendors/scripts/core.js"></script>
    <script src="../assests/vendors/scripts/script.min.js"></script>
    <script src="../assests/vendors/scripts/process.js"></script>
    <script src="../assests/vendors/scripts/layout-settings.js"></script>
    <script type="text/javascript">
        $(function() {
            var i = -1;
            var toastCount = 0;
            var $toastlast;

            var getMessage = function() {
                var msgs = ['My name is Inigo Montoya. You killed my father. Prepare to die!',
                    'Are you the six fingered man?',
                    'Inconceivable!',
                    'I do not think that means what you think it means.',
                    'Have fun storming the castle!'
                ];
                i++;
                if (i === msgs.length) {
                    i = 0;
                }

                return msgs[i];
            };

            var getMessageWithClearButton = function(msg) {
                msg = msg ? msg : 'Clear itself?';
                msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
                return msg;
            };

            $('#closeButton').click(function() {
                if ($(this).is(':checked')) {
                    $('#addBehaviorOnToastCloseClick').prop('disabled', false);
                } else {
                    $('#addBehaviorOnToastCloseClick').prop('disabled', true);
                    $('#addBehaviorOnToastCloseClick').prop('checked', false);
                }
            });

            $('#showtoast').click(function() {
                var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                var msg = $('#message').val();
                var title = $('#title').val() || '';
                var $showDuration = $('#showDuration');
                var $hideDuration = $('#hideDuration');
                var $timeOut = $('#timeOut');
                var $extendedTimeOut = $('#extendedTimeOut');
                var $showEasing = $('#showEasing');
                var $hideEasing = $('#hideEasing');
                var $showMethod = $('#showMethod');
                var $hideMethod = $('#hideMethod');
                var toastIndex = toastCount++;
                var addClear = $('#addClear').prop('checked');

                toastr.options = {
                    closeButton: $('#closeButton').prop('checked'),
                    debug: $('#debugInfo').prop('checked'),
                    newestOnTop: $('#newestOnTop').prop('checked'),
                    progressBar: $('#progressBar').prop('checked'),
                    rtl: $('#rtl').prop('checked'),
                    positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                    preventDuplicates: $('#preventDuplicates').prop('checked'),
                    onclick: null
                };

                if ($('#addBehaviorOnToastClick').prop('checked')) {
                    toastr.options.onclick = function() {
                        alert('You can perform some custom action after a toast goes away');
                    };
                }

                if ($('#addBehaviorOnToastCloseClick').prop('checked')) {
                    toastr.options.onCloseClick = function() {
                        alert('You can perform some custom action when the close button is clicked');
                    };
                }

                if ($showDuration.val().length) {
                    toastr.options.showDuration = parseInt($showDuration.val());
                }

                if ($hideDuration.val().length) {
                    toastr.options.hideDuration = parseInt($hideDuration.val());
                }

                if ($timeOut.val().length) {
                    toastr.options.timeOut = addClear ? 0 : parseInt($timeOut.val());
                }

                if ($extendedTimeOut.val().length) {
                    toastr.options.extendedTimeOut = addClear ? 0 : parseInt($extendedTimeOut.val());
                }

                if ($showEasing.val().length) {
                    toastr.options.showEasing = $showEasing.val();
                }

                if ($hideEasing.val().length) {
                    toastr.options.hideEasing = $hideEasing.val();
                }

                if ($showMethod.val().length) {
                    toastr.options.showMethod = $showMethod.val();
                }

                if ($hideMethod.val().length) {
                    toastr.options.hideMethod = $hideMethod.val();
                }

                if (addClear) {
                    msg = getMessageWithClearButton(msg);
                    toastr.options.tapToDismiss = false;
                }
                if (!msg) {
                    msg = getMessage();
                }

                $('#toastrOptions').text('Command: toastr["' +
                    shortCutFunction +
                    '"]("' +
                    msg +
                    (title ? '", "' + title : '') +
                    '")\n\ntoastr.options = ' +
                    JSON.stringify(toastr.options, null, 2)
                );

                var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                $toastlast = $toast;

                if (typeof $toast === 'undefined') {
                    return;
                }

                if ($toast.find('#okBtn').length) {
                    $toast.delegate('#okBtn', 'click', function() {
                        alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                        $toast.remove();
                    });
                }
                if ($toast.find('#surpriseBtn').length) {
                    $toast.delegate('#surpriseBtn', 'click', function() {
                        alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                    });
                }
                if ($toast.find('.clear').length) {
                    $toast.delegate('.clear', 'click', function() {
                        toastr.clear($toast, {
                            force: true
                        });
                    });
                }
            });

            function getLastToast() {
                return $toastlast;
            }
            $('#clearlasttoast').click(function() {
                toastr.clear(getLastToast());
            });
            $('#cleartoasts').click(function() {
                toastr.clear();
            });
        })
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>