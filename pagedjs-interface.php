<style>
    /* CSS for Paged.js interface – v0.2 */

    /* Change the look */
    :root {
        --color-background: whitesmoke;
        --color-pageSheet: #cfcfcf;
        --color-pageBox: violet;
        --color-paper: white;
        --color-marginBox: transparent;
        --pagedjs-crop-color: black;
        --pagedjs-crop-shadow: white;
        --pagedjs-crop-stroke: 1px;
    }

    /* To define how the book look on the screen: */
    @media screen {
        body {
            background-color: var(--color-background);
        }

        .pagedjs_pages {
            display: flex;
            width: calc(var(--pagedjs-width) * 2);
            flex: 0;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .pagedjs_page {
            background-color: var(--color-paper);
            box-shadow: 0 0 0 1px var(--color-pageSheet);
            margin: 0;
            flex-shrink: 0;
            flex-grow: 0;
            margin-top: 10mm;
        }

        .pagedjs_first_page {
            margin-left: var(--pagedjs-width);
        }

        .pagedjs_page:last-of-type {
            margin-bottom: 10mm;
        }

        .pagedjs_pagebox {
            box-shadow: 0 0 0 1px var(--color-pageBox);
        }

        .pagedjs_left_page {
            z-index: 20;
            width: calc(var(--pagedjs-bleed-left) + var(--pagedjs-pagebox-width)) !important;
        }

        .pagedjs_left_page .pagedjs_bleed-right .pagedjs_marks-crop {
            border-color: transparent;
        }

        .pagedjs_left_page .pagedjs_bleed-right .pagedjs_marks-middle {
            width: 0;
        }

        .pagedjs_right_page {
            z-index: 10;
            position: relative;
            left: calc(var(--pagedjs-bleed-left)*-1);
        }

        /* show the margin-box */

        .pagedjs_margin-top-left-corner-holder,
        .pagedjs_margin-top,
        .pagedjs_margin-top-left,
        .pagedjs_margin-top-center,
        .pagedjs_margin-top-right,
        .pagedjs_margin-top-right-corner-holder,
        .pagedjs_margin-bottom-left-corner-holder,
        .pagedjs_margin-bottom,
        .pagedjs_margin-bottom-left,
        .pagedjs_margin-bottom-center,
        .pagedjs_margin-bottom-right,
        .pagedjs_margin-bottom-right-corner-holder,
        .pagedjs_margin-right,
        .pagedjs_margin-right-top,
        .pagedjs_margin-right-middle,
        .pagedjs_margin-right-bottom,
        .pagedjs_margin-left,
        .pagedjs_margin-left-top,
        .pagedjs_margin-left-middle,
        .pagedjs_margin-left-bottom {
            box-shadow: 0 0 0 1px inset var(--color-marginBox);
        }

        /* uncomment this part for recto/verso book : ------------------------------------ */


        .pagedjs_pages {
            flex-direction: column;
            width: 100%;
        }

        .pagedjs_first_page {
            margin-left: 0;
        }

        .pagedjs_page {
            margin: 0 auto;
            margin-top: 10mm;
        }

        .pagedjs_left_page {
            width: calc(var(--pagedjs-bleed-left) + var(--pagedjs-pagebox-width) + var(--pagedjs-bleed-left)) !important;
        }

        .pagedjs_left_page .pagedjs_bleed-right .pagedjs_marks-crop {
            border-color: var(--pagedjs-crop-color);
        }

        .pagedjs_left_page .pagedjs_bleed-right .pagedjs_marks-middle {
            width: var(--pagedjs-cross-size) !important;
        }

        .pagedjs_right_page {
            left: 0;
        }




        /*--------------------------------------------------------------------------------------*/



        /* uncomment this par to see the baseline : -------------------------------------------*/


        /* .pagedjs_pagebox {
        --pagedjs-baseline: 22px;
        --pagedjs-baseline-position: 5px;
        --pagedjs-baseline-color: cyan;
        background: linear-gradient(transparent 0%, transparent calc(var(--pagedjs-baseline) - 1px), var(--pagedjs-baseline-color) calc(var(--pagedjs-baseline) - 1px), var(--pagedjs-baseline-color) var(--pagedjs-baseline)), transparent;
        background-size: 100% var(--pagedjs-baseline);
        background-repeat: repeat-y;
        background-position-y: var(--pagedjs-baseline-position);
    }  */


        /*--------------------------------------------------------------------------------------*/
    }





    /* Marks (to delete when merge in paged.js) */

    .pagedjs_marks-crop {
        z-index: 999999999999;

    }

    .pagedjs_bleed-top .pagedjs_marks-crop,
    .pagedjs_bleed-bottom .pagedjs_marks-crop {
        box-shadow: 1px 0px 0px 0px var(--pagedjs-crop-shadow);
    }

    .pagedjs_bleed-top .pagedjs_marks-crop:last-child,
    .pagedjs_bleed-bottom .pagedjs_marks-crop:last-child {
        box-shadow: -1px 0px 0px 0px var(--pagedjs-crop-shadow);
    }

    .pagedjs_bleed-left .pagedjs_marks-crop,
    .pagedjs_bleed-right .pagedjs_marks-crop {
        box-shadow: 0px 1px 0px 0px var(--pagedjs-crop-shadow);
    }

    .pagedjs_bleed-left .pagedjs_marks-crop:last-child,
    .pagedjs_bleed-right .pagedjs_marks-crop:last-child {
        box-shadow: 0px -1px 0px 0px var(--pagedjs-crop-shadow);
</style>