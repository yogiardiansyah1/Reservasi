<!DOCTYPE html>

<head>
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap);

        :root {
            --bs-blue: #007bff;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #e83e8c;
            --bs-red: #d9534f;
            --bs-orange: #fd7e14;
            --bs-yellow: #f0ad4e;
            --bs-green: #4bbf73;
            --bs-teal: #20c997;
            --bs-cyan: #1f9bcf;
            --bs-white: #fff;
            --bs-gray: #919aa1;
            --bs-gray-dark: #343a40;
            --bs-primary: #1a1a1a;
            --bs-secondary: #fff;
            --bs-success: #4bbf73;
            --bs-info: #1f9bcf;
            --bs-warning: #f0ad4e;
            --bs-danger: #d9534f;
            --bs-light: #fff;
            --bs-dark: #343a40;
            --bs-font-sans-serif: "Nunito Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #55595c;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        hr {
            margin: 1rem 0;
            color: inherit;
            background-color: currentColor;
            border: 0;
            opacity: .25
        }

        hr:not([size]) {
            height: 1px
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem;
            font-weight: 600;
            line-height: 1.2;
            color: #1a1a1a
        }

        .h1,
        h1 {
            font-size: calc(1.325rem + .9vw)
        }

        @media (min-width:1200px) {

            .h1,
            h1 {
                font-size: 2rem
            }
        }

        .h2,
        h2 {
            font-size: calc(1.3rem + .6vw)
        }

        @media (min-width:1200px) {

            .h2,
            h2 {
                font-size: 1.75rem
            }
        }

        .h3,
        h3 {
            font-size: calc(1.275rem + .3vw)
        }

        @media (min-width:1200px) {

            .h3,
            h3 {
                font-size: 1.5rem
            }
        }

        .h4,
        h4 {
            font-size: 1.25rem
        }

        .h5,
        h5 {
            font-size: 1rem
        }

        .h6,
        h6 {
            font-size: .75rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }


        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card>.list-group:first-child {
            border-top-width: 0
        }

        .card>.list-group:last-child {
            border-bottom-width: 0
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem 1rem
        }

        .card-title {
            margin-bottom: .5rem
        }

        .card-subtitle {
            margin-top: -.25rem;
            margin-bottom: 0
        }

        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1rem
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer {
            padding: .5rem 1rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header-tabs {
            margin-right: -.5rem;
            margin-bottom: -.5rem;
            margin-left: -.5rem;
            border-bottom: 0
        }

        .card-header-pills {
            margin-right: -.5rem;
            margin-left: -.5rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            width: 100%
        }

        .card-group>.card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-group {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap
            }

            .card-group>.card {
                -ms-flex: 1 0 0%;
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0
            }
        }
        .list-group-horizontal {
            -ms-flex-direction: row;
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:1400px) {
            .list-group-horizontal-xxl {
                -ms-flex-direction: row;
                flex-direction: row
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            color: #101010;
            background-color: #d1d1d1
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #101010;
            background-color: #bcbcbc
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #101010;
            border-color: #101010
        }

        .list-group-item-secondary {
            color: #999;
            background-color: #fff
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #999;
            background-color: #e6e6e6
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #999;
            border-color: #999
        }

        .list-group-item-success {
            color: #2d7345;
            background-color: #dbf2e3
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #2d7345;
            background-color: #c5dacc
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #2d7345;
            border-color: #2d7345
        }

        .list-group-item-info {
            color: #135d7c;
            background-color: #d2ebf5
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #135d7c;
            background-color: #bdd4dd
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #135d7c;
            border-color: #135d7c
        }

        .list-group-item-warning {
            color: #90682f;
            background-color: #fcefdc
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #90682f;
            background-color: #e3d7c6
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #90682f;
            border-color: #90682f
        }

        .list-group-item-danger {
            color: #82322f;
            background-color: #f7dddc
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #82322f;
            background-color: #dec7c6
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #82322f;
            border-color: #82322f
        }

        .list-group-item-light {
            color: #999;
            background-color: #fff
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #999;
            background-color: #e6e6e6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #999;
            border-color: #999
        }

        .list-group-item-dark {
            color: #1f2326;
            background-color: #d6d8d9
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #1f2326;
            background-color: #c1c2c3
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1f2326;
            border-color: #1f2326
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: .25em .25em;
            color: #000;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            border: 0;
            opacity: .5
        }

        .btn-close:hover {
            color: #000;
            text-decoration: none;
            opacity: .75
        }

        .btn-close:focus {
            outline: 0;
            box-shadow: 0 0 0 .25rem rgba(26, 26, 26, .25);
            opacity: 1
        }

        .btn-close.disabled,
        .btn-close:disabled {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: .25
        }

        .btn-close-white {
            -webkit-filter: invert(1) grayscale(100%) brightness(200%);
            filter: invert(1) grayscale(100%) brightness(200%)
        }

        .toast {
            width: 350px;
            max-width: 100%;
            font-size: .875rem;
            pointer-events: auto;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .1);
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15)
        }

        .toast:not(.showing):not(.show) {
            opacity: 0
        }

        .toast.hide {
            display: none
        }

        .toast-container {
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content;
            max-width: 100%;
            pointer-events: none
        }

        .toast-container>:not(:last-child) {
            margin-bottom: .75rem
        }

        .toast-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding: .5rem .75rem;
            color: #919aa1;
            background-color: rgba(255, 255, 255, .85);
            background-clip: padding-box;
            border-bottom: 1px solid rgba(0, 0, 0, .05)
        }

        .toast-header .btn-close {
            margin-right: -.375rem;
            margin-left: .75rem
        }

        .toast-body {
            padding: .75rem;
            word-wrap: break-word
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1060;
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -50px);
            transform: translate(0, -50px)
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            -webkit-transform: none;
            transform: none
        }

        .modal.modal-static .modal-dialog {
            -webkit-transform: scale(1.02);
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            height: calc(100% - 1rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - 1rem)
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            width: 100vw;
            height: 100vh;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #eceeef
        }

        .modal-header .btn-close {
            padding: .5rem .5rem;
            margin: -.5rem -.5rem -.5rem auto
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .modal-body {
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1rem
        }

        .modal-footer {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding: .75rem;
            border-top: 1px solid #eceeef
        }

        .modal-footer>* {
            margin: .25rem
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-scrollable {
                height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px
            }
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0
        }

        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto
        }

        @media (max-width:575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto
            }
        }

        @media (max-width:1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0
            }

            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1080;
            display: block;
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            opacity: 0
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .tooltip-arrow {
            position: absolute;
            display: block;
            width: .8rem;
            height: .4rem
        }

        .tooltip .tooltip-arrow::before {
            position: absolute;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-tooltip-auto[data-popper-placement^=top],
        .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,
        .bs-tooltip-top .tooltip-arrow {
            bottom: 0
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,
        .bs-tooltip-top .tooltip-arrow::before {
            top: -1px;
            border-width: .4rem .4rem 0;
            border-top-color: #000
        }

        .bs-tooltip-auto[data-popper-placement^=right],
        .bs-tooltip-end {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,
        .bs-tooltip-end .tooltip-arrow {
            left: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,
        .bs-tooltip-end .tooltip-arrow::before {
            right: -1px;
            border-width: .4rem .4rem .4rem 0;
            border-right-color: #000
        }

        .bs-tooltip-auto[data-popper-placement^=bottom],
        .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,
        .bs-tooltip-bottom .tooltip-arrow {
            top: 0
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,
        .bs-tooltip-bottom .tooltip-arrow::before {
            bottom: -1px;
            border-width: 0 .4rem .4rem;
            border-bottom-color: #000
        }

        .bs-tooltip-auto[data-popper-placement^=left],
        .bs-tooltip-start {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,
        .bs-tooltip-start .tooltip-arrow {
            right: 0;
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,
        .bs-tooltip-start .tooltip-arrow::before {
            left: -1px;
            border-width: .4rem 0 .4rem .4rem;
            border-left-color: #000
        }

        .tooltip-inner {
            max-width: 200px;
            padding: .25rem .5rem;
            color: #fff;
            text-align: center;
            background-color: #000
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1070;
            display: block;
            max-width: 276px;
            font-family: var(--bs-font-sans-serif);
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2)
        }

        .popover .popover-arrow {
            position: absolute;
            display: block;
            width: 1rem;
            height: .5rem
        }

        .popover .popover-arrow::after,
        .popover .popover-arrow::before {
            position: absolute;
            display: block;
            content: "";
            border-color: transparent;
            border-style: solid
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow,
        .bs-popover-top>.popover-arrow {
            bottom: calc(-.5rem - 1px)
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
        .bs-popover-top>.popover-arrow::before {
            bottom: 0;
            border-width: .5rem .5rem 0;
            border-top-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,
        .bs-popover-top>.popover-arrow::after {
            bottom: 1px;
            border-width: .5rem .5rem 0;
            border-top-color: #fff
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow,
        .bs-popover-end>.popover-arrow {
            left: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
        .bs-popover-end>.popover-arrow::before {
            left: 0;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,
        .bs-popover-end>.popover-arrow::after {
            left: 1px;
            border-width: .5rem .5rem .5rem 0;
            border-right-color: #fff
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,
        .bs-popover-bottom>.popover-arrow {
            top: calc(-.5rem - 1px)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
        .bs-popover-bottom>.popover-arrow::before {
            top: 0;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,
        .bs-popover-bottom>.popover-arrow::after {
            top: 1px;
            border-width: 0 .5rem .5rem .5rem;
            border-bottom-color: #fff
        }

        .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,
        .bs-popover-bottom .popover-header::before {
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 1rem;
            margin-left: -.5rem;
            content: "";
            border-bottom: 1px solid #f0f0f0
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow,
        .bs-popover-start>.popover-arrow {
            right: calc(-.5rem - 1px);
            width: .5rem;
            height: 1rem
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
        .bs-popover-start>.popover-arrow::before {
            right: 0;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,
        .bs-popover-start>.popover-arrow::after {
            right: 1px;
            border-width: .5rem 0 .5rem .5rem;
            border-left-color: #fff
        }

        .popover-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            font-size: 1rem;
            color: #1a1a1a;
            background-color: #f0f0f0;
            border-bottom: 1px solid rgba(0, 0, 0, .2)
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            padding: 1rem 1rem;
            color: #55595c
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            -ms-touch-action: pan-y;
            touch-action: pan-y
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner::after {
            display: block;
            clear: both;
            content: ""
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition: -webkit-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;
            transition: transform .6s ease-in-out, -webkit-transform .6s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-end,
        .carousel-item-next:not(.carousel-item-start) {
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .active.carousel-item-start,
        .carousel-item-prev:not(.carousel-item-end) {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            -webkit-transform: none;
            transform: none
        }

        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1
        }

        .carousel-fade .active.carousel-item-end,
        .carousel-fade .active.carousel-item-start {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s .6s
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-end,
            .carousel-fade .active.carousel-item-start {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            opacity: .5;
            transition: opacity .15s ease
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            background-repeat: no-repeat;
            background-position: 50%;
            background-size: 100% 100%
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 2;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 0;
            margin-right: 15%;
            margin-bottom: 1rem;
            margin-left: 15%;
            list-style: none
        }

        .carousel-indicators [data-bs-target] {
            box-sizing: content-box;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 30px;
            height: 3px;
            padding: 0;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators [data-bs-target] {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 1.25rem;
            left: 15%;
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            color: #fff;
            text-align: center
        }

        .carousel-dark .carousel-control-next-icon,
        .carousel-dark .carousel-control-prev-icon {
            -webkit-filter: invert(1) grayscale(100);
            filter: invert(1) grayscale(100)
        }

        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000
        }

        .carousel-dark .carousel-caption {
            color: #000
        }

        @-webkit-keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes spinner-border {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .spinner-border {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -.125em;
            border: .25em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: .75s linear infinite spinner-border;
            animation: .75s linear infinite spinner-border
        }

        .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: .2em
        }

        @-webkit-keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none
            }
        }

        .spinner-grow {
            display: inline-block;
            width: 2rem;
            height: 2rem;
            vertical-align: -.125em;
            background-color: currentColor;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: .75s linear infinite spinner-grow;
            animation: .75s linear infinite spinner-grow
        }

        .spinner-grow-sm {
            width: 1rem;
            height: 1rem
        }

        @media (prefers-reduced-motion:reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s
            }
        }

        .offcanvas {
            position: fixed;
            bottom: 0;
            z-index: 1050;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 100%;
            visibility: hidden;
            background-color: #fff;
            background-clip: padding-box;
            outline: 0;
            transition: -webkit-transform .3s ease-in-out;
            transition: transform .3s ease-in-out;
            transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .offcanvas {
                transition: none
            }
        }

        .offcanvas-header {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 1rem 1rem
        }

        .offcanvas-header .btn-close {
            padding: .5rem .5rem;
            margin-top: -.5rem;
            margin-right: -.5rem;
            margin-bottom: -.5rem
        }

        .offcanvas-title {
            margin-bottom: 0;
            line-height: 1.5
        }

        .offcanvas-body {
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding: 1rem 1rem;
            overflow-y: auto
        }

        .offcanvas-start {
            top: 0;
            left: 0;
            width: 400px;
            border-right: 1px solid rgba(0, 0, 0, .2);
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%)
        }

        .offcanvas-end {
            top: 0;
            right: 0;
            width: 400px;
            border-left: 1px solid rgba(0, 0, 0, .2);
            -webkit-transform: translateX(100%);
            transform: translateX(100%)
        }

        .offcanvas-top {
            top: 0;
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, .2);
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%)
        }

        .offcanvas-bottom {
            right: 0;
            left: 0;
            height: 30vh;
            max-height: 100%;
            border-top: 1px solid rgba(0, 0, 0, .2);
            -webkit-transform: translateY(100%);
            transform: translateY(100%)
        }

        .offcanvas.show {
            -webkit-transform: none;
            transform: none
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: ""
        }

        .link-primary {
            color: #1a1a1a
        }

        .link-primary:focus,
        .link-primary:hover {
            color: #151515
        }

        .link-secondary {
            color: #fff
        }

        .link-secondary:focus,
        .link-secondary:hover {
            color: #fff
        }

        .link-success {
            color: #4bbf73
        }

        .link-success:focus,
        .link-success:hover {
            color: #3c995c
        }

        .link-info {
            color: #1f9bcf
        }

        .link-info:focus,
        .link-info:hover {
            color: #197ca6
        }

        .link-warning {
            color: #f0ad4e
        }

        .link-warning:focus,
        .link-warning:hover {
            color: #f3bd71
        }

        .link-danger {
            color: #d9534f
        }

        .link-danger:focus,
        .link-danger:hover {
            color: #ae423f
        }

        .link-light {
            color: #fff
        }

        .link-light:focus,
        .link-light:hover {
            color: #fff
        }

        .link-dark {
            color: #343a40
        }

        .link-dark:focus,
        .link-dark:hover {
            color: #2a2e33
        }

        .ratio {
            position: relative;
            width: 100%
        }

        .ratio::before {
            display: block;
            padding-top: var(--bs-aspect-ratio);
            content: ""
        }

        .ratio>* {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%
        }

        .ratio-4x3 {
            --bs-aspect-ratio: calc(3 / 4 * 100%)
        }

        .ratio-16x9 {
            --bs-aspect-ratio: calc(9 / 16 * 100%)
        }

        .ratio-21x9 {
            --bs-aspect-ratio: calc(9 / 21 * 100%)
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            position: fixed;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1030
        }

        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }

        @media (min-width:576px) {
            .sticky-sm-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:768px) {
            .sticky-md-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:992px) {
            .sticky-lg-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:1200px) {
            .sticky-xl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:1400px) {
            .sticky-xxl-top {
                position: -webkit-sticky;
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border: 0 !important
        }

        .stretched-link::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            content: ""
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .float-start {
            float: left !important
        }

        .float-end {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .overflow-visible {
            overflow: visible !important
        }

        .overflow-scroll {
            overflow: scroll !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-grid {
            display: grid !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-inline-flex {
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }

        .d-none {
            display: none !important
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: -webkit-sticky !important;
            position: sticky !important
        }

        .top-0 {
            top: 0 !important
        }

        .top-50 {
            top: 50% !important
        }

        .top-100 {
            top: 100% !important
        }

        .bottom-0 {
            bottom: 0 !important
        }

        .bottom-50 {
            bottom: 50% !important
        }

        .bottom-100 {
            bottom: 100% !important
        }

        .start-0 {
            left: 0 !important
        }

        .start-50 {
            left: 50% !important
        }

        .start-100 {
            left: 100% !important
        }

        .end-0 {
            right: 0 !important
        }

        .end-50 {
            right: 50% !important
        }

        .end-100 {
            right: 100% !important
        }

        .translate-middle {
            -webkit-transform: translate(-50%, -50%) !important;
            transform: translate(-50%, -50%) !important
        }

        .translate-middle-x {
            -webkit-transform: translateX(-50%) !important;
            transform: translateX(-50%) !important
        }

        .translate-middle-y {
            -webkit-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important
        }

        .border {
            border: 1px solid #eceeef !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top {
            border-top: 1px solid #eceeef !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-end {
            border-right: 1px solid #eceeef !important
        }

        .border-end-0 {
            border-right: 0 !important
        }

        .border-bottom {
            border-bottom: 1px solid #eceeef !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-start {
            border-left: 1px solid #eceeef !important
        }

        .border-start-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #1a1a1a !important
        }

        .border-secondary {
            border-color: #fff !important
        }

        .border-success {
            border-color: #4bbf73 !important
        }

        .border-info {
            border-color: #1f9bcf !important
        }

        .border-warning {
            border-color: #f0ad4e !important
        }

        .border-danger {
            border-color: #d9534f !important
        }

        .border-light {
            border-color: #fff !important
        }

        .border-dark {
            border-color: #343a40 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .border-1 {
            border-width: 1px !important
        }

        .border-2 {
            border-width: 2px !important
        }

        .border-3 {
            border-width: 3px !important
        }

        .border-4 {
            border-width: 4px !important
        }

        .border-5 {
            border-width: 5px !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .flex-fill {
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important
        }

        .flex-row {
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-column {
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-row-reverse {
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-grow-0 {
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important
        }

        .flex-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .gap-0 {
            gap: 0 !important
        }

        .gap-1 {
            gap: .25rem !important
        }

        .gap-2 {
            gap: .5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .gap-4 {
            gap: 1.5rem !important
        }

        .gap-5 {
            gap: 3rem !important
        }

        .justify-content-start {
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-end {
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-between {
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .justify-content-evenly {
            -ms-flex-pack: space-evenly !important;
            justify-content: space-evenly !important
        }

        .align-items-start {
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-end {
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-baseline {
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }

        .order-first {
            -ms-flex-order: -1 !important;
            order: -1 !important
        }

        .order-0 {
            -ms-flex-order: 0 !important;
            order: 0 !important
        }

        .order-1 {
            -ms-flex-order: 1 !important;
            order: 1 !important
        }

        .order-2 {
            -ms-flex-order: 2 !important;
            order: 2 !important
        }

        .order-3 {
            -ms-flex-order: 3 !important;
            order: 3 !important
        }

        .order-4 {
            -ms-flex-order: 4 !important;
            order: 4 !important
        }

        .order-5 {
            -ms-flex-order: 5 !important;
            order: 5 !important
        }

        .order-last {
            -ms-flex-order: 6 !important;
            order: 6 !important
        }

        .m-0 {
            margin: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mx-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .me-0 {
            margin-right: 0 !important
        }

        .me-1 {
            margin-right: .25rem !important
        }

        .me-2 {
            margin-right: .5rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .me-4 {
            margin-right: 1.5rem !important
        }

        .me-5 {
            margin-right: 3rem !important
        }

        .me-auto {
            margin-right: auto !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .mb-auto {
            margin-bottom: auto !important
        }

        .ms-0 {
            margin-left: 0 !important
        }

        .ms-1 {
            margin-left: .25rem !important
        }

        .ms-2 {
            margin-left: .5rem !important
        }

        .ms-3 {
            margin-left: 1rem !important
        }

        .ms-4 {
            margin-left: 1.5rem !important
        }

        .ms-5 {
            margin-left: 3rem !important
        }

        .ms-auto {
            margin-left: auto !important
        }

        .p-0 {
            padding: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .px-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pt-3 {
            padding-top: 1rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pe-0 {
            padding-right: 0 !important
        }

        .pe-1 {
            padding-right: .25rem !important
        }

        .pe-2 {
            padding-right: .5rem !important
        }

        .pe-3 {
            padding-right: 1rem !important
        }

        .pe-4 {
            padding-right: 1.5rem !important
        }

        .pe-5 {
            padding-right: 3rem !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pb-3 {
            padding-bottom: 1rem !important
        }

        .pb-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .ps-0 {
            padding-left: 0 !important
        }

        .ps-1 {
            padding-left: .25rem !important
        }

        .ps-2 {
            padding-left: .5rem !important
        }

        .ps-3 {
            padding-left: 1rem !important
        }

        .ps-4 {
            padding-left: 1.5rem !important
        }

        .ps-5 {
            padding-left: 3rem !important
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important
        }

        .fs-1 {
            font-size: calc(1.325rem + .9vw) !important
        }

        .fs-2 {
            font-size: calc(1.3rem + .6vw) !important
        }

        .fs-3 {
            font-size: calc(1.275rem + .3vw) !important
        }

        .fs-4 {
            font-size: 1.25rem !important
        }

        .fs-5 {
            font-size: 1rem !important
        }

        .fs-6 {
            font-size: .75rem !important
        }

        .fst-italic {
            font-style: italic !important
        }

        .fst-normal {
            font-style: normal !important
        }

        .fw-light {
            font-weight: 300 !important
        }

        .fw-lighter {
            font-weight: lighter !important
        }

        .fw-normal {
            font-weight: 400 !important
        }

        .fw-bold {
            font-weight: 700 !important
        }

        .fw-bolder {
            font-weight: bolder !important
        }

        .lh-1 {
            line-height: 1 !important
        }

        .lh-sm {
            line-height: 1.25 !important
        }

        .lh-base {
            line-height: 1.5 !important
        }

        .lh-lg {
            line-height: 2 !important
        }

        .text-start {
            text-align: left !important
        }

        .text-end {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important
        }

        .text-primary {
            color: #1a1a1a !important
        }

        .text-secondary {
            color: #fff !important
        }

        .text-success {
            color: #4bbf73 !important
        }

        .text-info {
            color: #1f9bcf !important
        }

        .text-warning {
            color: #f0ad4e !important
        }

        .text-danger {
            color: #d9534f !important
        }

        .text-light {
            color: #fff !important
        }

        .text-dark {
            color: #343a40 !important
        }

        .text-white {
            color: #fff !important
        }

        .text-body {
            color: #55595c !important
        }

        .text-muted {
            color: #919aa1 !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: rgba(255, 255, 255, .5) !important
        }

        .text-reset {
            color: inherit !important
        }

        .bg-primary {
            background-color: #1a1a1a !important
        }

        .bg-secondary {
            background-color: #fff !important
        }

        .bg-success {
            background-color: #4bbf73 !important
        }

        .bg-info {
            background-color: #1f9bcf !important
        }

        .bg-warning {
            background-color: #f0ad4e !important
        }

        .bg-danger {
            background-color: #d9534f !important
        }

        .bg-light {
            background-color: #fff !important
        }

        .bg-dark {
            background-color: #343a40 !important
        }

        .bg-body {
            background-color: #fff !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .pe-none {
            pointer-events: none !important
        }

        .pe-auto {
            pointer-events: auto !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .rounded-1 {
            border-radius: .2rem !important
        }

        .rounded-2 {
            border-radius: .25rem !important
        }

        .rounded-3 {
            border-radius: .3rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: 50rem !important
        }

        .rounded-top {
            border-top-left-radius: .25rem !important;
            border-top-right-radius: .25rem !important
        }

        .rounded-end {
            border-top-right-radius: .25rem !important;
            border-bottom-right-radius: .25rem !important
        }

        .rounded-bottom {
            border-bottom-right-radius: .25rem !important;
            border-bottom-left-radius: .25rem !important
        }

        .rounded-start {
            border-bottom-left-radius: .25rem !important;
            border-top-left-radius: .25rem !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media (min-width:576px) {
            .float-sm-start {
                float: left !important
            }

            .float-sm-end {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-grid {
                display: grid !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-sm-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-sm-none {
                display: none !important
            }

            .flex-sm-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-sm-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-sm-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-sm-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .flex-sm-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .gap-sm-0 {
                gap: 0 !important
            }

            .gap-sm-1 {
                gap: .25rem !important
            }

            .gap-sm-2 {
                gap: .5rem !important
            }

            .gap-sm-3 {
                gap: 1rem !important
            }

            .gap-sm-4 {
                gap: 1.5rem !important
            }

            .gap-sm-5 {
                gap: 3rem !important
            }

            .justify-content-sm-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-sm-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .justify-content-sm-evenly {
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important
            }

            .align-items-sm-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-sm-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-sm-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-sm-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-sm-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-sm-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-sm-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-sm-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-sm-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-sm-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-sm-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-sm-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-sm-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-sm-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .order-sm-first {
                -ms-flex-order: -1 !important;
                order: -1 !important
            }

            .order-sm-0 {
                -ms-flex-order: 0 !important;
                order: 0 !important
            }

            .order-sm-1 {
                -ms-flex-order: 1 !important;
                order: 1 !important
            }

            .order-sm-2 {
                -ms-flex-order: 2 !important;
                order: 2 !important
            }

            .order-sm-3 {
                -ms-flex-order: 3 !important;
                order: 3 !important
            }

            .order-sm-4 {
                -ms-flex-order: 4 !important;
                order: 4 !important
            }

            .order-sm-5 {
                -ms-flex-order: 5 !important;
                order: 5 !important
            }

            .order-sm-last {
                -ms-flex-order: 6 !important;
                order: 6 !important
            }

            .m-sm-0 {
                margin: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mx-sm-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-sm-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-sm-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-sm-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-sm-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-sm-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-sm-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-sm-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-sm-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-sm-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-sm-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-sm-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-sm-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-sm-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-sm-0 {
                margin-top: 0 !important
            }

            .mt-sm-1 {
                margin-top: .25rem !important
            }

            .mt-sm-2 {
                margin-top: .5rem !important
            }

            .mt-sm-3 {
                margin-top: 1rem !important
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important
            }

            .mt-sm-5 {
                margin-top: 3rem !important
            }

            .mt-sm-auto {
                margin-top: auto !important
            }

            .me-sm-0 {
                margin-right: 0 !important
            }

            .me-sm-1 {
                margin-right: .25rem !important
            }

            .me-sm-2 {
                margin-right: .5rem !important
            }

            .me-sm-3 {
                margin-right: 1rem !important
            }

            .me-sm-4 {
                margin-right: 1.5rem !important
            }

            .me-sm-5 {
                margin-right: 3rem !important
            }

            .me-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-0 {
                margin-bottom: 0 !important
            }

            .mb-sm-1 {
                margin-bottom: .25rem !important
            }

            .mb-sm-2 {
                margin-bottom: .5rem !important
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important
            }

            .mb-sm-auto {
                margin-bottom: auto !important
            }

            .ms-sm-0 {
                margin-left: 0 !important
            }

            .ms-sm-1 {
                margin-left: .25rem !important
            }

            .ms-sm-2 {
                margin-left: .5rem !important
            }

            .ms-sm-3 {
                margin-left: 1rem !important
            }

            .ms-sm-4 {
                margin-left: 1.5rem !important
            }

            .ms-sm-5 {
                margin-left: 3rem !important
            }

            .ms-sm-auto {
                margin-left: auto !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .px-sm-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-sm-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-sm-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-sm-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-sm-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-sm-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-sm-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-sm-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-sm-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-sm-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-sm-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-sm-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-sm-0 {
                padding-top: 0 !important
            }

            .pt-sm-1 {
                padding-top: .25rem !important
            }

            .pt-sm-2 {
                padding-top: .5rem !important
            }

            .pt-sm-3 {
                padding-top: 1rem !important
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important
            }

            .pt-sm-5 {
                padding-top: 3rem !important
            }

            .pe-sm-0 {
                padding-right: 0 !important
            }

            .pe-sm-1 {
                padding-right: .25rem !important
            }

            .pe-sm-2 {
                padding-right: .5rem !important
            }

            .pe-sm-3 {
                padding-right: 1rem !important
            }

            .pe-sm-4 {
                padding-right: 1.5rem !important
            }

            .pe-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-0 {
                padding-bottom: 0 !important
            }

            .pb-sm-1 {
                padding-bottom: .25rem !important
            }

            .pb-sm-2 {
                padding-bottom: .5rem !important
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important
            }

            .ps-sm-0 {
                padding-left: 0 !important
            }

            .ps-sm-1 {
                padding-left: .25rem !important
            }

            .ps-sm-2 {
                padding-left: .5rem !important
            }

            .ps-sm-3 {
                padding-left: 1rem !important
            }

            .ps-sm-4 {
                padding-left: 1.5rem !important
            }

            .ps-sm-5 {
                padding-left: 3rem !important
            }

            .text-sm-start {
                text-align: left !important
            }

            .text-sm-end {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .float-md-start {
                float: left !important
            }

            .float-md-end {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-grid {
                display: grid !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-md-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-md-none {
                display: none !important
            }

            .flex-md-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-md-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-md-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-md-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .flex-md-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .gap-md-0 {
                gap: 0 !important
            }

            .gap-md-1 {
                gap: .25rem !important
            }

            .gap-md-2 {
                gap: .5rem !important
            }

            .gap-md-3 {
                gap: 1rem !important
            }

            .gap-md-4 {
                gap: 1.5rem !important
            }

            .gap-md-5 {
                gap: 3rem !important
            }

            .justify-content-md-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-md-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-md-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .justify-content-md-evenly {
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important
            }

            .align-items-md-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-md-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-md-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-md-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-md-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-md-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-md-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-md-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-md-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-md-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-md-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-md-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-md-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-md-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-md-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-md-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-md-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .order-md-first {
                -ms-flex-order: -1 !important;
                order: -1 !important
            }

            .order-md-0 {
                -ms-flex-order: 0 !important;
                order: 0 !important
            }

            .order-md-1 {
                -ms-flex-order: 1 !important;
                order: 1 !important
            }

            .order-md-2 {
                -ms-flex-order: 2 !important;
                order: 2 !important
            }

            .order-md-3 {
                -ms-flex-order: 3 !important;
                order: 3 !important
            }

            .order-md-4 {
                -ms-flex-order: 4 !important;
                order: 4 !important
            }

            .order-md-5 {
                -ms-flex-order: 5 !important;
                order: 5 !important
            }

            .order-md-last {
                -ms-flex-order: 6 !important;
                order: 6 !important
            }

            .m-md-0 {
                margin: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mx-md-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-md-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-md-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-md-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-md-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-md-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-md-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-md-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-md-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-md-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-md-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-md-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-md-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-md-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-md-0 {
                margin-top: 0 !important
            }

            .mt-md-1 {
                margin-top: .25rem !important
            }

            .mt-md-2 {
                margin-top: .5rem !important
            }

            .mt-md-3 {
                margin-top: 1rem !important
            }

            .mt-md-4 {
                margin-top: 1.5rem !important
            }

            .mt-md-5 {
                margin-top: 3rem !important
            }

            .mt-md-auto {
                margin-top: auto !important
            }

            .me-md-0 {
                margin-right: 0 !important
            }

            .me-md-1 {
                margin-right: .25rem !important
            }

            .me-md-2 {
                margin-right: .5rem !important
            }

            .me-md-3 {
                margin-right: 1rem !important
            }

            .me-md-4 {
                margin-right: 1.5rem !important
            }

            .me-md-5 {
                margin-right: 3rem !important
            }

            .me-md-auto {
                margin-right: auto !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .mb-md-1 {
                margin-bottom: .25rem !important
            }

            .mb-md-2 {
                margin-bottom: .5rem !important
            }

            .mb-md-3 {
                margin-bottom: 1rem !important
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-md-5 {
                margin-bottom: 3rem !important
            }

            .mb-md-auto {
                margin-bottom: auto !important
            }

            .ms-md-0 {
                margin-left: 0 !important
            }

            .ms-md-1 {
                margin-left: .25rem !important
            }

            .ms-md-2 {
                margin-left: .5rem !important
            }

            .ms-md-3 {
                margin-left: 1rem !important
            }

            .ms-md-4 {
                margin-left: 1.5rem !important
            }

            .ms-md-5 {
                margin-left: 3rem !important
            }

            .ms-md-auto {
                margin-left: auto !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .px-md-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-md-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-md-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-md-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-md-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-md-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-md-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-md-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-md-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-md-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-md-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-md-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-md-0 {
                padding-top: 0 !important
            }

            .pt-md-1 {
                padding-top: .25rem !important
            }

            .pt-md-2 {
                padding-top: .5rem !important
            }

            .pt-md-3 {
                padding-top: 1rem !important
            }

            .pt-md-4 {
                padding-top: 1.5rem !important
            }

            .pt-md-5 {
                padding-top: 3rem !important
            }

            .pe-md-0 {
                padding-right: 0 !important
            }

            .pe-md-1 {
                padding-right: .25rem !important
            }

            .pe-md-2 {
                padding-right: .5rem !important
            }

            .pe-md-3 {
                padding-right: 1rem !important
            }

            .pe-md-4 {
                padding-right: 1.5rem !important
            }

            .pe-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-0 {
                padding-bottom: 0 !important
            }

            .pb-md-1 {
                padding-bottom: .25rem !important
            }

            .pb-md-2 {
                padding-bottom: .5rem !important
            }

            .pb-md-3 {
                padding-bottom: 1rem !important
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-md-5 {
                padding-bottom: 3rem !important
            }

            .ps-md-0 {
                padding-left: 0 !important
            }

            .ps-md-1 {
                padding-left: .25rem !important
            }

            .ps-md-2 {
                padding-left: .5rem !important
            }

            .ps-md-3 {
                padding-left: 1rem !important
            }

            .ps-md-4 {
                padding-left: 1.5rem !important
            }

            .ps-md-5 {
                padding-left: 3rem !important
            }

            .text-md-start {
                text-align: left !important
            }

            .text-md-end {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .float-lg-start {
                float: left !important
            }

            .float-lg-end {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-grid {
                display: grid !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-lg-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-lg-none {
                display: none !important
            }

            .flex-lg-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-lg-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-lg-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-lg-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .flex-lg-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .gap-lg-0 {
                gap: 0 !important
            }

            .gap-lg-1 {
                gap: .25rem !important
            }

            .gap-lg-2 {
                gap: .5rem !important
            }

            .gap-lg-3 {
                gap: 1rem !important
            }

            .gap-lg-4 {
                gap: 1.5rem !important
            }

            .gap-lg-5 {
                gap: 3rem !important
            }

            .justify-content-lg-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-lg-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .justify-content-lg-evenly {
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important
            }

            .align-items-lg-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-lg-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-lg-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-lg-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-lg-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-lg-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-lg-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-lg-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-lg-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-lg-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-lg-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-lg-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-lg-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-lg-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .order-lg-first {
                -ms-flex-order: -1 !important;
                order: -1 !important
            }

            .order-lg-0 {
                -ms-flex-order: 0 !important;
                order: 0 !important
            }

            .order-lg-1 {
                -ms-flex-order: 1 !important;
                order: 1 !important
            }

            .order-lg-2 {
                -ms-flex-order: 2 !important;
                order: 2 !important
            }

            .order-lg-3 {
                -ms-flex-order: 3 !important;
                order: 3 !important
            }

            .order-lg-4 {
                -ms-flex-order: 4 !important;
                order: 4 !important
            }

            .order-lg-5 {
                -ms-flex-order: 5 !important;
                order: 5 !important
            }

            .order-lg-last {
                -ms-flex-order: 6 !important;
                order: 6 !important
            }

            .m-lg-0 {
                margin: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mx-lg-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-lg-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-lg-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-lg-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-lg-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-lg-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-lg-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-lg-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-lg-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-lg-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-lg-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-lg-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-lg-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-lg-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-lg-0 {
                margin-top: 0 !important
            }

            .mt-lg-1 {
                margin-top: .25rem !important
            }

            .mt-lg-2 {
                margin-top: .5rem !important
            }

            .mt-lg-3 {
                margin-top: 1rem !important
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important
            }

            .mt-lg-5 {
                margin-top: 3rem !important
            }

            .mt-lg-auto {
                margin-top: auto !important
            }

            .me-lg-0 {
                margin-right: 0 !important
            }

            .me-lg-1 {
                margin-right: .25rem !important
            }

            .me-lg-2 {
                margin-right: .5rem !important
            }

            .me-lg-3 {
                margin-right: 1rem !important
            }

            .me-lg-4 {
                margin-right: 1.5rem !important
            }

            .me-lg-5 {
                margin-right: 3rem !important
            }

            .me-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }

            .mb-lg-1 {
                margin-bottom: .25rem !important
            }

            .mb-lg-2 {
                margin-bottom: .5rem !important
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important
            }

            .mb-lg-auto {
                margin-bottom: auto !important
            }

            .ms-lg-0 {
                margin-left: 0 !important
            }

            .ms-lg-1 {
                margin-left: .25rem !important
            }

            .ms-lg-2 {
                margin-left: .5rem !important
            }

            .ms-lg-3 {
                margin-left: 1rem !important
            }

            .ms-lg-4 {
                margin-left: 1.5rem !important
            }

            .ms-lg-5 {
                margin-left: 3rem !important
            }

            .ms-lg-auto {
                margin-left: auto !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .px-lg-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-lg-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-lg-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-lg-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-lg-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-lg-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-lg-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-lg-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-lg-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-lg-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-lg-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-lg-0 {
                padding-top: 0 !important
            }

            .pt-lg-1 {
                padding-top: .25rem !important
            }

            .pt-lg-2 {
                padding-top: .5rem !important
            }

            .pt-lg-3 {
                padding-top: 1rem !important
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important
            }

            .pt-lg-5 {
                padding-top: 3rem !important
            }

            .pe-lg-0 {
                padding-right: 0 !important
            }

            .pe-lg-1 {
                padding-right: .25rem !important
            }

            .pe-lg-2 {
                padding-right: .5rem !important
            }

            .pe-lg-3 {
                padding-right: 1rem !important
            }

            .pe-lg-4 {
                padding-right: 1.5rem !important
            }

            .pe-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-0 {
                padding-bottom: 0 !important
            }

            .pb-lg-1 {
                padding-bottom: .25rem !important
            }

            .pb-lg-2 {
                padding-bottom: .5rem !important
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important
            }

            .ps-lg-0 {
                padding-left: 0 !important
            }

            .ps-lg-1 {
                padding-left: .25rem !important
            }

            .ps-lg-2 {
                padding-left: .5rem !important
            }

            .ps-lg-3 {
                padding-left: 1rem !important
            }

            .ps-lg-4 {
                padding-left: 1.5rem !important
            }

            .ps-lg-5 {
                padding-left: 3rem !important
            }

            .text-lg-start {
                text-align: left !important
            }

            .text-lg-end {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-start {
                float: left !important
            }

            .float-xl-end {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-grid {
                display: grid !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-xl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-xl-none {
                display: none !important
            }

            .flex-xl-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-xl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-xl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-xl-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .flex-xl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .gap-xl-0 {
                gap: 0 !important
            }

            .gap-xl-1 {
                gap: .25rem !important
            }

            .gap-xl-2 {
                gap: .5rem !important
            }

            .gap-xl-3 {
                gap: 1rem !important
            }

            .gap-xl-4 {
                gap: 1.5rem !important
            }

            .gap-xl-5 {
                gap: 3rem !important
            }

            .justify-content-xl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-xl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .justify-content-xl-evenly {
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important
            }

            .align-items-xl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-xl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-xl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-xl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-xl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-xl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-xl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-xl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-xl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-xl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-xl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-xl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-xl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-xl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .order-xl-first {
                -ms-flex-order: -1 !important;
                order: -1 !important
            }

            .order-xl-0 {
                -ms-flex-order: 0 !important;
                order: 0 !important
            }

            .order-xl-1 {
                -ms-flex-order: 1 !important;
                order: 1 !important
            }

            .order-xl-2 {
                -ms-flex-order: 2 !important;
                order: 2 !important
            }

            .order-xl-3 {
                -ms-flex-order: 3 !important;
                order: 3 !important
            }

            .order-xl-4 {
                -ms-flex-order: 4 !important;
                order: 4 !important
            }

            .order-xl-5 {
                -ms-flex-order: 5 !important;
                order: 5 !important
            }

            .order-xl-last {
                -ms-flex-order: 6 !important;
                order: 6 !important
            }

            .m-xl-0 {
                margin: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mx-xl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xl-0 {
                margin-top: 0 !important
            }

            .mt-xl-1 {
                margin-top: .25rem !important
            }

            .mt-xl-2 {
                margin-top: .5rem !important
            }

            .mt-xl-3 {
                margin-top: 1rem !important
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xl-5 {
                margin-top: 3rem !important
            }

            .mt-xl-auto {
                margin-top: auto !important
            }

            .me-xl-0 {
                margin-right: 0 !important
            }

            .me-xl-1 {
                margin-right: .25rem !important
            }

            .me-xl-2 {
                margin-right: .5rem !important
            }

            .me-xl-3 {
                margin-right: 1rem !important
            }

            .me-xl-4 {
                margin-right: 1.5rem !important
            }

            .me-xl-5 {
                margin-right: 3rem !important
            }

            .me-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-0 {
                margin-bottom: 0 !important
            }

            .mb-xl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xl-auto {
                margin-bottom: auto !important
            }

            .ms-xl-0 {
                margin-left: 0 !important
            }

            .ms-xl-1 {
                margin-left: .25rem !important
            }

            .ms-xl-2 {
                margin-left: .5rem !important
            }

            .ms-xl-3 {
                margin-left: 1rem !important
            }

            .ms-xl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xl-5 {
                margin-left: 3rem !important
            }

            .ms-xl-auto {
                margin-left: auto !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .px-xl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xl-0 {
                padding-top: 0 !important
            }

            .pt-xl-1 {
                padding-top: .25rem !important
            }

            .pt-xl-2 {
                padding-top: .5rem !important
            }

            .pt-xl-3 {
                padding-top: 1rem !important
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xl-5 {
                padding-top: 3rem !important
            }

            .pe-xl-0 {
                padding-right: 0 !important
            }

            .pe-xl-1 {
                padding-right: .25rem !important
            }

            .pe-xl-2 {
                padding-right: .5rem !important
            }

            .pe-xl-3 {
                padding-right: 1rem !important
            }

            .pe-xl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-0 {
                padding-bottom: 0 !important
            }

            .pb-xl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xl-0 {
                padding-left: 0 !important
            }

            .ps-xl-1 {
                padding-left: .25rem !important
            }

            .ps-xl-2 {
                padding-left: .5rem !important
            }

            .ps-xl-3 {
                padding-left: 1rem !important
            }

            .ps-xl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xl-5 {
                padding-left: 3rem !important
            }

            .text-xl-start {
                text-align: left !important
            }

            .text-xl-end {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        @media (min-width:1400px) {
            .float-xxl-start {
                float: left !important
            }

            .float-xxl-end {
                float: right !important
            }

            .float-xxl-none {
                float: none !important
            }

            .d-xxl-inline {
                display: inline !important
            }

            .d-xxl-inline-block {
                display: inline-block !important
            }

            .d-xxl-block {
                display: block !important
            }

            .d-xxl-grid {
                display: grid !important
            }

            .d-xxl-table {
                display: table !important
            }

            .d-xxl-table-row {
                display: table-row !important
            }

            .d-xxl-table-cell {
                display: table-cell !important
            }

            .d-xxl-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-xxl-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-xxl-none {
                display: none !important
            }

            .flex-xxl-fill {
                -ms-flex: 1 1 auto !important;
                flex: 1 1 auto !important
            }

            .flex-xxl-row {
                -ms-flex-direction: row !important;
                flex-direction: row !important
            }

            .flex-xxl-column {
                -ms-flex-direction: column !important;
                flex-direction: column !important
            }

            .flex-xxl-row-reverse {
                -ms-flex-direction: row-reverse !important;
                flex-direction: row-reverse !important
            }

            .flex-xxl-column-reverse {
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }

            .flex-xxl-grow-0 {
                -ms-flex-positive: 0 !important;
                flex-grow: 0 !important
            }

            .flex-xxl-grow-1 {
                -ms-flex-positive: 1 !important;
                flex-grow: 1 !important
            }

            .flex-xxl-shrink-0 {
                -ms-flex-negative: 0 !important;
                flex-shrink: 0 !important
            }

            .flex-xxl-shrink-1 {
                -ms-flex-negative: 1 !important;
                flex-shrink: 1 !important
            }

            .flex-xxl-wrap {
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important
            }

            .flex-xxl-nowrap {
                -ms-flex-wrap: nowrap !important;
                flex-wrap: nowrap !important
            }

            .flex-xxl-wrap-reverse {
                -ms-flex-wrap: wrap-reverse !important;
                flex-wrap: wrap-reverse !important
            }

            .gap-xxl-0 {
                gap: 0 !important
            }

            .gap-xxl-1 {
                gap: .25rem !important
            }

            .gap-xxl-2 {
                gap: .5rem !important
            }

            .gap-xxl-3 {
                gap: 1rem !important
            }

            .gap-xxl-4 {
                gap: 1.5rem !important
            }

            .gap-xxl-5 {
                gap: 3rem !important
            }

            .justify-content-xxl-start {
                -ms-flex-pack: start !important;
                justify-content: flex-start !important
            }

            .justify-content-xxl-end {
                -ms-flex-pack: end !important;
                justify-content: flex-end !important
            }

            .justify-content-xxl-center {
                -ms-flex-pack: center !important;
                justify-content: center !important
            }

            .justify-content-xxl-between {
                -ms-flex-pack: justify !important;
                justify-content: space-between !important
            }

            .justify-content-xxl-around {
                -ms-flex-pack: distribute !important;
                justify-content: space-around !important
            }

            .justify-content-xxl-evenly {
                -ms-flex-pack: space-evenly !important;
                justify-content: space-evenly !important
            }

            .align-items-xxl-start {
                -ms-flex-align: start !important;
                align-items: flex-start !important
            }

            .align-items-xxl-end {
                -ms-flex-align: end !important;
                align-items: flex-end !important
            }

            .align-items-xxl-center {
                -ms-flex-align: center !important;
                align-items: center !important
            }

            .align-items-xxl-baseline {
                -ms-flex-align: baseline !important;
                align-items: baseline !important
            }

            .align-items-xxl-stretch {
                -ms-flex-align: stretch !important;
                align-items: stretch !important
            }

            .align-content-xxl-start {
                -ms-flex-line-pack: start !important;
                align-content: flex-start !important
            }

            .align-content-xxl-end {
                -ms-flex-line-pack: end !important;
                align-content: flex-end !important
            }

            .align-content-xxl-center {
                -ms-flex-line-pack: center !important;
                align-content: center !important
            }

            .align-content-xxl-between {
                -ms-flex-line-pack: justify !important;
                align-content: space-between !important
            }

            .align-content-xxl-around {
                -ms-flex-line-pack: distribute !important;
                align-content: space-around !important
            }

            .align-content-xxl-stretch {
                -ms-flex-line-pack: stretch !important;
                align-content: stretch !important
            }

            .align-self-xxl-auto {
                -ms-flex-item-align: auto !important;
                align-self: auto !important
            }

            .align-self-xxl-start {
                -ms-flex-item-align: start !important;
                align-self: flex-start !important
            }

            .align-self-xxl-end {
                -ms-flex-item-align: end !important;
                align-self: flex-end !important
            }

            .align-self-xxl-center {
                -ms-flex-item-align: center !important;
                align-self: center !important
            }

            .align-self-xxl-baseline {
                -ms-flex-item-align: baseline !important;
                align-self: baseline !important
            }

            .align-self-xxl-stretch {
                -ms-flex-item-align: stretch !important;
                align-self: stretch !important
            }

            .order-xxl-first {
                -ms-flex-order: -1 !important;
                order: -1 !important
            }

            .order-xxl-0 {
                -ms-flex-order: 0 !important;
                order: 0 !important
            }

            .order-xxl-1 {
                -ms-flex-order: 1 !important;
                order: 1 !important
            }

            .order-xxl-2 {
                -ms-flex-order: 2 !important;
                order: 2 !important
            }

            .order-xxl-3 {
                -ms-flex-order: 3 !important;
                order: 3 !important
            }

            .order-xxl-4 {
                -ms-flex-order: 4 !important;
                order: 4 !important
            }

            .order-xxl-5 {
                -ms-flex-order: 5 !important;
                order: 5 !important
            }

            .order-xxl-last {
                -ms-flex-order: 6 !important;
                order: 6 !important
            }

            .m-xxl-0 {
                margin: 0 !important
            }

            .m-xxl-1 {
                margin: .25rem !important
            }

            .m-xxl-2 {
                margin: .5rem !important
            }

            .m-xxl-3 {
                margin: 1rem !important
            }

            .m-xxl-4 {
                margin: 1.5rem !important
            }

            .m-xxl-5 {
                margin: 3rem !important
            }

            .m-xxl-auto {
                margin: auto !important
            }

            .mx-xxl-0 {
                margin-right: 0 !important;
                margin-left: 0 !important
            }

            .mx-xxl-1 {
                margin-right: .25rem !important;
                margin-left: .25rem !important
            }

            .mx-xxl-2 {
                margin-right: .5rem !important;
                margin-left: .5rem !important
            }

            .mx-xxl-3 {
                margin-right: 1rem !important;
                margin-left: 1rem !important
            }

            .mx-xxl-4 {
                margin-right: 1.5rem !important;
                margin-left: 1.5rem !important
            }

            .mx-xxl-5 {
                margin-right: 3rem !important;
                margin-left: 3rem !important
            }

            .mx-xxl-auto {
                margin-right: auto !important;
                margin-left: auto !important
            }

            .my-xxl-0 {
                margin-top: 0 !important;
                margin-bottom: 0 !important
            }

            .my-xxl-1 {
                margin-top: .25rem !important;
                margin-bottom: .25rem !important
            }

            .my-xxl-2 {
                margin-top: .5rem !important;
                margin-bottom: .5rem !important
            }

            .my-xxl-3 {
                margin-top: 1rem !important;
                margin-bottom: 1rem !important
            }

            .my-xxl-4 {
                margin-top: 1.5rem !important;
                margin-bottom: 1.5rem !important
            }

            .my-xxl-5 {
                margin-top: 3rem !important;
                margin-bottom: 3rem !important
            }

            .my-xxl-auto {
                margin-top: auto !important;
                margin-bottom: auto !important
            }

            .mt-xxl-0 {
                margin-top: 0 !important
            }

            .mt-xxl-1 {
                margin-top: .25rem !important
            }

            .mt-xxl-2 {
                margin-top: .5rem !important
            }

            .mt-xxl-3 {
                margin-top: 1rem !important
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xxl-5 {
                margin-top: 3rem !important
            }

            .mt-xxl-auto {
                margin-top: auto !important
            }

            .me-xxl-0 {
                margin-right: 0 !important
            }

            .me-xxl-1 {
                margin-right: .25rem !important
            }

            .me-xxl-2 {
                margin-right: .5rem !important
            }

            .me-xxl-3 {
                margin-right: 1rem !important
            }

            .me-xxl-4 {
                margin-right: 1.5rem !important
            }

            .me-xxl-5 {
                margin-right: 3rem !important
            }

            .me-xxl-auto {
                margin-right: auto !important
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important
            }

            .mb-xxl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xxl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xxl-auto {
                margin-bottom: auto !important
            }

            .ms-xxl-0 {
                margin-left: 0 !important
            }

            .ms-xxl-1 {
                margin-left: .25rem !important
            }

            .ms-xxl-2 {
                margin-left: .5rem !important
            }

            .ms-xxl-3 {
                margin-left: 1rem !important
            }

            .ms-xxl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xxl-5 {
                margin-left: 3rem !important
            }

            .ms-xxl-auto {
                margin-left: auto !important
            }

            .p-xxl-0 {
                padding: 0 !important
            }

            .p-xxl-1 {
                padding: .25rem !important
            }

            .p-xxl-2 {
                padding: .5rem !important
            }

            .p-xxl-3 {
                padding: 1rem !important
            }

            .p-xxl-4 {
                padding: 1.5rem !important
            }

            .p-xxl-5 {
                padding: 3rem !important
            }

            .px-xxl-0 {
                padding-right: 0 !important;
                padding-left: 0 !important
            }

            .px-xxl-1 {
                padding-right: .25rem !important;
                padding-left: .25rem !important
            }

            .px-xxl-2 {
                padding-right: .5rem !important;
                padding-left: .5rem !important
            }

            .px-xxl-3 {
                padding-right: 1rem !important;
                padding-left: 1rem !important
            }

            .px-xxl-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important
            }

            .px-xxl-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important
            }

            .py-xxl-0 {
                padding-top: 0 !important;
                padding-bottom: 0 !important
            }

            .py-xxl-1 {
                padding-top: .25rem !important;
                padding-bottom: .25rem !important
            }

            .py-xxl-2 {
                padding-top: .5rem !important;
                padding-bottom: .5rem !important
            }

            .py-xxl-3 {
                padding-top: 1rem !important;
                padding-bottom: 1rem !important
            }

            .py-xxl-4 {
                padding-top: 1.5rem !important;
                padding-bottom: 1.5rem !important
            }

            .py-xxl-5 {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important
            }

            .pt-xxl-0 {
                padding-top: 0 !important
            }

            .pt-xxl-1 {
                padding-top: .25rem !important
            }

            .pt-xxl-2 {
                padding-top: .5rem !important
            }

            .pt-xxl-3 {
                padding-top: 1rem !important
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xxl-5 {
                padding-top: 3rem !important
            }

            .pe-xxl-0 {
                padding-right: 0 !important
            }

            .pe-xxl-1 {
                padding-right: .25rem !important
            }

            .pe-xxl-2 {
                padding-right: .5rem !important
            }

            .pe-xxl-3 {
                padding-right: 1rem !important
            }

            .pe-xxl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xxl-5 {
                padding-right: 3rem !important
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important
            }

            .pb-xxl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xxl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xxl-0 {
                padding-left: 0 !important
            }

            .ps-xxl-1 {
                padding-left: .25rem !important
            }

            .ps-xxl-2 {
                padding-left: .5rem !important
            }

            .ps-xxl-3 {
                padding-left: 1rem !important
            }

            .ps-xxl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xxl-5 {
                padding-left: 3rem !important
            }

            .text-xxl-start {
                text-align: left !important
            }

            .text-xxl-end {
                text-align: right !important
            }

            .text-xxl-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .fs-1 {
                font-size: 2rem !important
            }

            .fs-2 {
                font-size: 1.75rem !important
            }

            .fs-3 {
                font-size: 1.5rem !important
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-grid {
                display: grid !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .d-print-inline-flex {
                display: -ms-inline-flexbox !important;
                display: inline-flex !important
            }

            .d-print-none {
                display: none !important
            }
        }

        .navbar {
            font-size: .875rem;
            text-transform: uppercase;
            font-weight: 600
        }

        .navbar-nav .nav-link {
            padding-top: .715rem;
            padding-bottom: .715rem
        }

        .navbar-brand {
            margin-right: 2rem
        }

        .bg-primary {
            background-color: theme-color("primary") !important
        }

        .bg-light {
            border: 1px solid rgba(0, 0, 0, .1)
        }

        .bg-light.navbar-fixed-top {
            border-width: 0 0 1px
        }

        .bg-light.navbar-bottom-top {
            border-width: 1px 0 0
        }

        .nav-item {
            margin-right: 2rem
        }

        .btn {
            font-size: .875rem;
            text-transform: uppercase
        }

        .btn-group-sm>.btn,
        .btn-sm {
            font-size: 10px
        }

        .btn-warning,
        .btn-warning:focus,
        .btn-warning:hover,
        .btn-warning:not([disabled]):not(.disabled):active {
            color: #fff
        }

        .btn-outline-secondary {
            border-color: #919aa1;
            color: #919aa1
        }

        .btn-outline-secondary:not([disabled]):not(.disabled):active,
        .btn-outline-secondary:not([disabled]):not(.disabled):focus,
        .btn-outline-secondary:not([disabled]):not(.disabled):hover {
            background-color: #ced4da;
            border-color: #ced4da;
            color: #fff
        }

        .btn-outline-secondary:not([disabled]):not(.disabled):focus {
            box-shadow: 0 0 0 .2rem rgba(206, 212, 218, .5)
        }

        [class*=btn-outline-] {
            border-width: 2px
        }

        .border-secondary {
            border: 1px solid #ced4da !important
        }

        body {
            font-weight: 200;
            letter-spacing: 1px
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            text-transform: uppercase;
            letter-spacing: 3px
        }

        .text-secondary {
            color: #55595c !important
        }

        th {
            font-size: .875rem;
            text-transform: uppercase
        }

        .table td,
        .table th {
            padding: 1.5rem
        }

        .table-sm td,
        .table-sm th {
            padding: .75rem
        }

        .dropdown-menu {
            font-size: .875rem;
            text-transform: none
        }

        .badge {
            padding-top: .28rem
        }

        .badge-pill {
            border-radius: 10rem
        }

        .badge.bg-light,
        .badge.bg-secondary {
            color: #343a40
        }

        .list-group-item .h1,
        .list-group-item .h2,
        .list-group-item .h3,
        .list-group-item .h4,
        .list-group-item .h5,
        .list-group-item .h6,
        .list-group-item h1,
        .list-group-item h2,
        .list-group-item h3,
        .list-group-item h4,
        .list-group-item h5,
        .list-group-item h6 {
            color: inherit
        }

        .card-header,
        .card-title {
            color: inherit
        }

        .mgt {
            margin-top: 1.5rem !important;
        }

        .rsv-card {
            padding: 15px;
        }

        .rsv-tbl {
            width: 550px;
        }

    </style>
</head>

<body>

    <div class="card rsv-card">
        <div class="card-body">
            <h2 class="card-title">Reservasi berhasil.</h2>
            <p class="card-text mgt">Berikut adalah detail reservasi anda.</p>

            <table class="table rsv-tbl">
                <tbody>
                    <tr class="table-secondary">
                        <th scope="row">ID</th>
                        <td><?php echo $detail['id']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Nama</th>
                        <td><?php echo $detail['nama']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Jumlah kursi</th>
                        <td><?php echo $detail['kursi']; ?></td>
                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">Tanggal</th>
                        <td><?php echo $detail['tanggal']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
