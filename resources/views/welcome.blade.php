<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .baccground{
                position: Absolute;
                max-width: 100vw;
                max-height: 100vh;
            }
            .cttt {
                padding-left: 45%;
                
                padding-top: 10px;
                text-align: center;
            }
            .cttt h2{
                color: purple;
            }
          
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <svg class="baccground" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="3000" height="1500" preserveAspectRatio="none" viewBox="0 0 3000 1500">
                <g mask="url(&quot;#SvgjsMask1024&quot;)" fill="none">
                    <rect width="3000" height="1500" x="0" y="0" fill="url(&quot;#SvgjsLinearGradient1025&quot;)"></rect>
                    <path d="M-98.23 960.45L-98.23 960.45" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-98.23 960.45L91.94 995.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-98.23 960.45L-103.68 1156.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-98.23 960.45L107.22 1160.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-98.23 960.45L205.14 946.11" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-98.23 960.45L68.32 1242.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-103.68 1156.5L-103.68 1156.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-103.68 1156.5L68.32 1242.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-103.68 1156.5L107.22 1160.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-60.14 1418.61L-60.14 1418.61" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-60.14 1418.61L75.26 1441.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-60.14 1418.61L-54.25 1582.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-60.14 1418.61L68.32 1242.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-54.25 1582.27L-54.25 1582.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M-54.25 1582.27L83.53 1609.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M91.94 995.01L91.94 995.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M91.94 995.01L205.14 946.11" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M91.94 995.01L107.22 1160.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M91.94 995.01L259.57 1107.84" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M91.94 995.01L339.5 986.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M107.22 1160.5L107.22 1160.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M107.22 1160.5L68.32 1242.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M107.22 1160.5L259.57 1107.84" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M68.32 1242.98L68.32 1242.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M68.32 1242.98L75.26 1441.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M68.32 1242.98L208.05 1425.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M68.32 1242.98L259.57 1107.84" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M75.26 1441.43L75.26 1441.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M75.26 1441.43L208.05 1425.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M75.26 1441.43L83.53 1609.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M75.26 1441.43L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M83.53 1609.47L83.53 1609.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M83.53 1609.47L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M83.53 1609.47L208.05 1425.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M83.53 1609.47L-60.14 1418.61" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M205.14 946.11L205.14 946.11" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M205.14 946.11L339.5 986.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M205.14 946.11L259.57 1107.84" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M205.14 946.11L358.25 1093.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M205.14 946.11L107.22 1160.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M259.57 1107.84L259.57 1107.84" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M259.57 1107.84L358.25 1093.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M259.57 1107.84L339.5 986.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M259.57 1107.84L392.58 1242.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M208.05 1425.24L208.05 1425.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M208.05 1425.24L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M203.12 1551.88L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M339.5 986.62L339.5 986.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M339.5 986.62L358.25 1093.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M339.5 986.62L494.68 977.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M339.5 986.62L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M358.25 1093.68L358.25 1093.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M358.25 1093.68L392.58 1242.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M358.25 1093.68L494.68 977.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M358.25 1093.68L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M392.58 1242.27L392.58 1242.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M392.58 1242.27L559.72 1305.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M392.58 1242.27L357.63 1429.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M392.58 1242.27L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L357.63 1429.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L409.58 1558.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L208.05 1425.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L549.27 1438.41" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M357.63 1429.62L512.04 1572.09" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M409.58 1558.24L409.58 1558.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M409.58 1558.24L512.04 1572.09" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M409.58 1558.24L549.27 1438.41" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M409.58 1558.24L203.12 1551.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M494.68 977.32L494.68 977.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M494.68 977.32L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M494.68 977.32L647.66 958.64" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M552.38 1099.65L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M552.38 1099.65L704.77 1150.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M559.72 1305.43L559.72 1305.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M559.72 1305.43L642.67 1392.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M559.72 1305.43L549.27 1438.41" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M549.27 1438.41L549.27 1438.41" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M549.27 1438.41L642.67 1392.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M549.27 1438.41L512.04 1572.09" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M512.04 1572.09L512.04 1572.09" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M647.66 958.64L647.66 958.64" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M647.66 958.64L552.38 1099.65" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M647.66 958.64L704.77 1150.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M704.77 1150.46L704.77 1150.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M704.77 1150.46L797.94 1256.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M704.77 1150.46L846.59 1127.52" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M642.67 1392.07L642.67 1392.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.46 814.23L829.46 814.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.46 814.23L1011.39 793.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.46 814.23L1008.72 943.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.46 814.23L647.66 958.64" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.46 814.23L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M846.59 1127.52L846.59 1127.52" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M846.59 1127.52L797.94 1256.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M846.59 1127.52L1011.89 1101.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M846.59 1127.52L1008.72 943.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M797.94 1256.62L797.94 1256.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M797.94 1256.62L829.24 1397.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.24 1397.59L829.24 1397.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M829.24 1397.59L964.54 1394.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L815.3 1570" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L948.22 1584.26" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L829.24 1397.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L964.54 1394.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L642.67 1392.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M815.3 1570L549.27 1438.41" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.39 793.72L1011.39 793.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.39 793.72L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.39 793.72L1008.72 943.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.39 793.72L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.39 793.72L1277.85 820.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1008.72 943.62L1008.72 943.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1008.72 943.62L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1008.72 943.62L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.89 1101.47L1011.89 1101.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.89 1101.47L1133.63 1119.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.89 1101.47L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.89 1101.47L1008.72 943.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1011.89 1101.47L1090.73 1247.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M964.54 1394.43L964.54 1394.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M964.54 1394.43L1108.95 1444.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M964.54 1394.43L948.22 1584.26" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M948.22 1584.26L948.22 1584.26" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M948.22 1584.26L1153.05 1601.45" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M948.22 1584.26L1108.95 1444.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M948.22 1584.26L829.24 1397.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1105.08 859.58L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1105.08 859.58L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1122.9 1004.94L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1122.9 1004.94L1133.63 1119.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1133.63 1119.07L1133.63 1119.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1133.63 1119.07L1257.9 1155.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1133.63 1119.07L1090.73 1247.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1090.73 1247.98L1090.73 1247.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1090.73 1247.98L1257.9 1155.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1090.73 1247.98L964.54 1394.43" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1108.95 1444.73L1108.95 1444.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1108.95 1444.73L1153.05 1601.45" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1108.95 1444.73L1287.84 1405.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1108.95 1444.73L1090.73 1247.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1153.05 1601.45L1153.05 1601.45" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1153.05 1601.45L1307.04 1583.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1272.65 670.08L1272.65 670.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1272.65 670.08L1415.63 681.44" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1272.65 670.08L1277.85 820.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1277.85 820.32L1277.85 820.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1277.85 820.32L1267.88 954.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1277.85 820.32L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1277.85 820.32L1455.54 821.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1277.85 820.32L1423.51 949.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1267.88 954.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1122.9 1004.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1423.51 949.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1105.08 859.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1257.9 1155.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1267.88 954.32L1425.9 1096.21" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1257.9 1155.69L1257.9 1155.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1257.9 1155.69L1298.67 1311.31" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1257.9 1155.69L1406.47 1252.03" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1257.9 1155.69L1425.9 1096.21" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1298.67 1311.31" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1287.84 1405.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1406.47 1252.03" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1445.82 1422.06" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1090.73 1247.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1298.67 1311.31L1108.95 1444.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1287.84 1405.5L1287.84 1405.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1287.84 1405.5L1445.82 1422.06" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1307.04 1583.33L1307.04 1583.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1307.04 1583.33L1458.84 1577.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1449.79 536.07L1449.79 536.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1449.79 536.07L1586.12 518.52" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1449.79 536.07L1415.63 681.44" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1449.79 536.07L1571.6 677.36" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1415.63 681.44L1415.63 681.44" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1415.63 681.44L1455.54 821.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1415.63 681.44L1571.6 677.36" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1415.63 681.44L1569 799.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1415.63 681.44L1277.85 820.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1455.54 821.32L1455.54 821.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1455.54 821.32L1569 799.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1455.54 821.32L1423.51 949.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1455.54 821.32L1571.6 677.36" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1423.51 949.91L1423.51 949.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1423.51 949.91L1425.9 1096.21" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1425.9 1096.21L1425.9 1096.21" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1425.9 1096.21L1558.15 1131.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1425.9 1096.21L1406.47 1252.03" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1425.9 1096.21L1607.72 990.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1406.47 1252.03L1406.47 1252.03" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1406.47 1252.03L1445.82 1422.06" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1406.47 1252.03L1578.37 1288.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1445.82 1422.06L1445.82 1422.06" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1445.82 1422.06L1560.74 1449.14" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1445.82 1422.06L1458.84 1577.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1458.84 1577.19L1458.84 1577.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1458.84 1577.19L1601.28 1551.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1586.12 518.52L1586.12 518.52" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1586.12 518.52L1689.49 494.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1571.6 677.36L1571.6 677.36" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1571.6 677.36L1569 799.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1569 799.24L1569 799.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1607.72 990.82L1607.72 990.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1607.72 990.82L1558.15 1131.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1607.72 990.82L1757.82 951.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1607.72 990.82L1696.23 1136.79" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1607.72 990.82L1423.51 949.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1558.15 1131.91L1558.15 1131.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1558.15 1131.91L1696.23 1136.79" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1558.15 1131.91L1578.37 1288.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1558.15 1131.91L1406.47 1252.03" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1578.37 1288.97L1578.37 1288.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1578.37 1288.97L1560.74 1449.14" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1560.74 1449.14L1560.74 1449.14" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1560.74 1449.14L1601.28 1551.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1560.74 1449.14L1704.33 1454.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1601.28 1551.76L1601.28 1551.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1601.28 1551.76L1708.24 1563.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1601.28 1551.76L1704.33 1454.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1601.28 1551.76L1445.82 1422.06" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1743.78 252.83L1743.78 252.83" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1743.78 252.83L1720.25 355.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1743.78 252.83L1857.31 192.05" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1743.78 252.83L1879.25 367.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1743.78 252.83L1689.49 494.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1720.25 355.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1689.49 494.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1879.25 367.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1586.12 518.52" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1857.31 192.05" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1720.25 355.33L1885.42 495.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1689.49 494.08L1689.49 494.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1689.49 494.08L1885.42 495.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1735.86 694.75L1735.86 694.75" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1735.86 694.75L1888.22 661.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1757.82 951.97L1757.82 951.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1757.82 951.97L1896.39 1002.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1757.82 951.97L1696.23 1136.79" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1757.82 951.97L1893.08 792.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1696.23 1136.79L1696.23 1136.79" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1696.23 1136.79L1759.67 1273.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1759.67 1273.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1906.08 1294.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1578.37 1288.97" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1704.33 1454.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1901.44 1409.86" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1759.67 1273.46L1558.15 1131.91" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1704.33 1454.5L1704.33 1454.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1704.33 1454.5L1708.24 1563.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1708.24 1563.01L1708.24 1563.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1880.4 44.66L1880.4 44.66" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1880.4 44.66L1988.35 93.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1880.4 44.66L1857.31 192.05" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1880.4 44.66L2002.22 -73.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1880.4 44.66L1994.69 212.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1857.31 192.05L1857.31 192.05" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1857.31 192.05L1994.69 212.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1857.31 192.05L1988.35 93.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1879.25 367.93L1879.25 367.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1879.25 367.93L2003.83 393.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1879.25 367.93L1885.42 495.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1885.42 495.07L1885.42 495.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1885.42 495.07L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1885.42 495.07L2003.83 393.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1885.42 495.07L1888.22 661.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1888.22 661.02L1888.22 661.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1888.22 661.02L1893.08 792.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1888.22 661.02L2055.96 651.3" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1888.22 661.02L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1893.08 792.08L1893.08 792.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1893.08 792.08L1996.21 853.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L1896.39 1002.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L1995.51 980.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L2015.66 1100.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L1996.21 853.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L1893.08 792.08" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1896.39 1002.25L1696.23 1136.79" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1906.08 1294.56L1906.08 1294.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1906.08 1294.56L1901.44 1409.86" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1906.08 1294.56L2026.2 1258.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1906.08 1294.56L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1901.44 1409.86L1901.44 1409.86" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1901.44 1409.86L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1901.44 1409.86L1898.51 1557.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1901.44 1409.86L2026.2 1258.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L1898.51 1557.98" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L2028.2 1568.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L1708.24 1563.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L1704.33 1454.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1898.51 1557.98L1906.08 1294.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2002.22 -73.01L2002.22 -73.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2002.22 -73.01L2148.26 -84.49" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2002.22 -73.01L1988.35 93.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2002.22 -73.01L2177.52 55.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1988.35 93.56L1988.35 93.56" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1988.35 93.56L1994.69 212.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1994.69 212.07L1994.69 212.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1994.69 212.07L2174.79 204.38" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1994.69 212.07L2003.83 393.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1994.69 212.07L1879.25 367.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2003.83 393.85L2003.83 393.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2003.83 393.85L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2003.83 393.85L2163.58 382.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2013.22 497.68L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2055.96 651.3L2055.96 651.3" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2055.96 651.3L2155.39 709.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2055.96 651.3L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1996.21 853.71L1996.21 853.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1996.21 853.71L1995.51 980.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1996.21 853.71L2157.02 954.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1996.21 853.71L2055.96 651.3" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1995.51 980.02L1995.51 980.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M1995.51 980.02L2015.66 1100.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2015.66 1100.63L2015.66 1100.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2015.66 1100.63L2144.51 1152.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2015.66 1100.63L2026.2 1258.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2015.66 1100.63L2157.02 954.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2026.2 1258.87L2026.2 1258.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2026.2 1258.87L2144.51 1152.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2026.2 1258.87L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2026.2 1258.87L2203.23 1265.96" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2046.17 1417.15L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2046.17 1417.15L2176.15 1439.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2028.2 1568.72L2028.2 1568.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2028.2 1568.72L2177.39 1594.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2028.2 1568.72L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2028.2 1568.72L2176.15 1439.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2148.26 -84.49L2148.26 -84.49" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2148.26 -84.49L2177.52 55.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.52 55.6L2177.52 55.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.52 55.6L2174.79 204.38" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.52 55.6L2337.41 87.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.52 55.6L2309.26 -83.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2174.79 204.38L2174.79 204.38" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2174.79 204.38L2339.57 224.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2174.79 204.38L2163.58 382.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2174.79 204.38L2337.41 87.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2163.58 382.19L2163.58 382.19" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2163.58 382.19L2186.79 521.39" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2163.58 382.19L2289.47 509.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2163.58 382.19L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2163.58 382.19L2360.59 381.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2186.79 521.39" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2289.47 509.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2013.22 497.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2055.96 651.3" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2155.39 709.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2186.79 521.39L2340.17 655.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2155.39 709.54L2155.39 709.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2155.39 709.54L2211.96 852.77" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2155.39 709.54L2340.17 655.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2155.39 709.54L1996.21 853.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2155.39 709.54L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2211.96 852.77L2211.96 852.77" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2211.96 852.77L2157.02 954.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2211.96 852.77L2308.76 960.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2211.96 852.77L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2211.96 852.77L1996.21 853.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2157.02 954.01L2157.02 954.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2157.02 954.01L2308.76 960.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2144.51 1152.46L2144.51 1152.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2144.51 1152.46L2203.23 1265.96" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2144.51 1152.46L2157.02 954.01" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2144.51 1152.46L2330.26 1270.13" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2144.51 1152.46L1995.51 980.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2203.23 1265.96L2203.23 1265.96" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2203.23 1265.96L2330.26 1270.13" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2203.23 1265.96L2176.15 1439.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2203.23 1265.96L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2203.23 1265.96L2346.86 1460.92" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2176.15 1439.76L2176.15 1439.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2176.15 1439.76L2177.39 1594.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.39 1594.58L2177.39 1594.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.39 1594.58L2317.61 1552.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.39 1594.58L2346.86 1460.92" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2177.39 1594.58L2046.17 1417.15" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2309.26 -83.94L2309.26 -83.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2309.26 -83.94L2459.11 -53.9" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2309.26 -83.94L2148.26 -84.49" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2337.41 87.69L2337.41 87.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2337.41 87.69L2339.57 224.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2337.41 87.69L2309.26 -83.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2337.41 87.69L2459.11 -53.9" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2339.57 224.82L2339.57 224.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2339.57 224.82L2446.03 244.28" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2339.57 224.82L2360.59 381.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2339.57 224.82L2440.1 404.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2360.59 381.54L2360.59 381.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2360.59 381.54L2440.1 404.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2360.59 381.54L2289.47 509.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2360.59 381.54L2458.62 494.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2289.47 509.7L2289.47 509.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2289.47 509.7L2340.17 655.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2340.17 655.58L2340.17 655.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2340.17 655.58L2460.47 663.42" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2340.17 655.58L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2340.17 655.58L2458.62 494.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2358.21 792.23L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2308.76 960.6L2308.76 960.6" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2308.76 960.6L2442.22 1007.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2308.76 960.6L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2308.76 960.6L2466.97 1125.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2308.76 960.6L2144.51 1152.46" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2330.26 1270.13L2330.26 1270.13" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2330.26 1270.13L2491.66 1274.95" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2346.86 1460.92L2346.86 1460.92" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2346.86 1460.92L2317.61 1552.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2346.86 1460.92L2484.73 1551.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2346.86 1460.92L2176.15 1439.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2346.86 1460.92L2330.26 1270.13" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2317.61 1552.54L2317.61 1552.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2459.11 -53.9L2459.11 -53.9" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2446.03 244.28L2446.03 244.28" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2446.03 244.28L2440.1 404.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2446.03 244.28L2360.59 381.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2446.03 244.28L2625.37 238.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2446.03 244.28L2337.41 87.69" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2440.1 404.24L2440.1 404.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2440.1 404.24L2458.62 494.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2458.62 494.27L2458.62 494.27" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2458.62 494.27L2460.47 663.42" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2458.62 494.27L2289.47 509.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2458.62 494.27L2618.55 555.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2458.62 494.27L2599.08 363.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2460.47 663.42L2460.47 663.42" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2460.47 663.42L2358.21 792.23" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2460.47 663.42L2626.74 706.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2442.22 1007.07L2442.22 1007.07" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2442.22 1007.07L2466.97 1125.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2466.97 1125.63L2466.97 1125.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2466.97 1125.63L2491.66 1274.95" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2466.97 1125.63L2662.02 1128.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2466.97 1125.63L2330.26 1270.13" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2491.66 1274.95L2491.66 1274.95" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2491.66 1274.95L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2491.66 1274.95L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2491.66 1274.95L2662.02 1128.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2491.66 1274.95L2346.86 1460.92" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2484.73 1551.33L2484.73 1551.33" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2484.73 1551.33L2317.61 1552.54" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2484.73 1551.33L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2484.73 1551.33L2491.66 1274.95" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2656.4 -90.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2753.25 -81.81" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2602.58 40.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2459.11 -53.9" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2751.09 92.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2656.4 -90.22L2932.67 -106.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2602.58 40.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2751.09 92.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2459.11 -53.9" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2753.25 -81.81" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2625.37 238.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2602.58 40.63L2783.94 201.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2625.37 238.68L2625.37 238.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2625.37 238.68L2599.08 363.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2599.08 363.88L2599.08 363.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2599.08 363.88L2440.1 404.24" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2599.08 363.88L2618.55 555.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2599.08 363.88L2446.03 244.28" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2618.55 555.32L2618.55 555.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2618.55 555.32L2737.92 523.67" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2618.55 555.32L2626.74 706.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2626.74 706.7L2626.74 706.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2626.74 706.7L2611.31 810.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2611.31 810.63L2611.31 810.63" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2611.31 810.63L2633.21 939.55" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2633.21 939.55L2633.21 939.55" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2633.21 939.55L2771.97 969.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2662.02 1128.73L2662.02 1128.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2662.02 1128.73L2739.98 1117.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2662.02 1128.73L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2641.13 1299.68L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2641.13 1299.68L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2634.91 1401.48L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2634.91 1401.48L2803.62 1544.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2753.25 -81.81L2753.25 -81.81" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2753.25 -81.81L2751.09 92.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2751.09 92.22L2751.09 92.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2751.09 92.22L2783.94 201.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2751.09 92.22L2896.29 66.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2783.94 201.94L2783.94 201.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2783.94 201.94L2625.37 238.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2737.92 523.67" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2803.49 658.1" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2599.08 363.88" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2626.74 706.7" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2958.37 544.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2737.92 523.67L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2803.49 658.1L2803.49 658.1" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2803.49 658.1L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2803.49 658.1L2779.73 792.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2779.73 792.73L2779.73 792.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2779.73 792.73L2894.1 835.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2771.97 969.32L2771.97 969.32" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2771.97 969.32L2739.98 1117.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2771.97 969.32L2779.73 792.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2771.97 969.32L2894.1 835.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2739.98 1117.47L2739.98 1117.47" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2739.98 1117.47L2795.7 1248.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2739.98 1117.47L2896.03 1248.4" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2739.98 1117.47L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2795.7 1248.85L2795.7 1248.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2795.7 1248.85L2896.03 1248.4" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2795.7 1248.85L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2795.7 1248.85L2662.02 1128.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2795.7 1248.85L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2803.62 1544.58L2803.62 1544.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2803.62 1544.58L2923.34 1605.8" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L2932.67 -106.5" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L3102.44 -65.89" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L2896.29 66.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L2753.25 -81.81" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L3066.94 52.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.67 -106.5L2751.09 92.22" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.29 66.62L2896.29 66.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.29 66.62L2950.37 207.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.29 66.62L3066.94 52.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2950.37 207.76L2950.37 207.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2950.37 207.76L3073.65 210.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2950.37 207.76L2954.47 340.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L2954.47 340.87" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L3104.99 361.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L3073.65 210.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L2958.37 544.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L2783.94 201.94" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.47 340.87L3079.39 525.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2958.37 544.59L2958.37 544.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2958.37 544.59L3079.39 525.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2958.37 544.59L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.87 683.17L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2932.87 683.17L3055.08 691.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2894.1 835.85L2894.1 835.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2894.1 835.85L2954.81 946.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2894.1 835.85L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2894.1 835.85L2803.49 658.1" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2894.1 835.85L3055.08 691.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.81 946.82L2954.81 946.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2954.81 946.82L3077.81 952.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.03 1248.4L2896.03 1248.4" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.03 1248.4L3085.98 1238.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.03 1248.4L3088.17 1115.53" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.03 1248.4L3064.28 1416.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2896.03 1248.4L2641.13 1299.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2923.34 1605.8L2923.34 1605.8" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2923.34 1605.8L3075.47 1565.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2923.34 1605.8L3064.28 1416.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2923.34 1605.8L2634.91 1401.48" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M2923.34 1605.8L2896.03 1248.4" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3102.44 -65.89L3102.44 -65.89" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3102.44 -65.89L3066.94 52.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3066.94 52.71L3066.94 52.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3066.94 52.71L3073.65 210.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3066.94 52.71L2950.37 207.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3073.65 210.02L3073.65 210.02" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3073.65 210.02L3104.99 361.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3073.65 210.02L2896.29 66.62" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3104.99 361.93L3104.99 361.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3104.99 361.93L3079.39 525.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3104.99 361.93L2950.37 207.76" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3104.99 361.93L2958.37 544.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3104.99 361.93L3066.94 52.71" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3079.39 525.17L3079.39 525.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3079.39 525.17L3055.08 691.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3079.39 525.17L2932.87 683.17" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3055.08 691.68L3055.08 691.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3055.08 691.68L3111.72 805.16" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3055.08 691.68L2958.37 544.59" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3111.72 805.16L3111.72 805.16" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3111.72 805.16L3077.81 952.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3077.81 952.25L3077.81 952.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3077.81 952.25L3088.17 1115.53" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3077.81 952.25L2894.1 835.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3077.81 952.25L3055.08 691.68" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3088.17 1115.53L3088.17 1115.53" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3088.17 1115.53L3085.98 1238.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3088.17 1115.53L2954.81 946.82" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3088.17 1115.53L3064.28 1416.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3088.17 1115.53L3111.72 805.16" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3085.98 1238.72L3085.98 1238.72" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3085.98 1238.72L3064.28 1416.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3085.98 1238.72L3077.81 952.25" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3085.98 1238.72L2795.7 1248.85" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3064.28 1416.73L3064.28 1416.73" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3064.28 1416.73L3075.47 1565.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3064.28 1416.73L2803.62 1544.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3075.47 1565.93L3075.47 1565.93" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <path d="M3075.47 1565.93L2803.62 1544.58" stroke="rgba(60, 19, 101, 1)" stroke-width="1.5"></path>
                    <circle r="5" cx="-98.23" cy="960.45" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="-103.68" cy="1156.5" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="-60.14" cy="1418.61" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="-54.25" cy="1582.27" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="91.94" cy="995.01" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="107.22" cy="1160.5" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="68.32" cy="1242.98" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="75.26" cy="1441.43" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="83.53" cy="1609.47" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="205.14" cy="946.11" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="259.57" cy="1107.84" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="208.05" cy="1425.24" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="203.12" cy="1551.88" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="339.5" cy="986.62" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="358.25" cy="1093.68" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="392.58" cy="1242.27" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="357.63" cy="1429.62" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="409.58" cy="1558.24" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="494.68" cy="977.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="552.38" cy="1099.65" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="559.72" cy="1305.43" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="549.27" cy="1438.41" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="512.04" cy="1572.09" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="647.66" cy="958.64" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="704.77" cy="1150.46" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="642.67" cy="1392.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="829.46" cy="814.23" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="846.59" cy="1127.52" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="797.94" cy="1256.62" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="829.24" cy="1397.59" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="815.3" cy="1570" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1011.39" cy="793.72" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1008.72" cy="943.62" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1011.89" cy="1101.47" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="964.54" cy="1394.43" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="948.22" cy="1584.26" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1105.08" cy="859.58" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1122.9" cy="1004.94" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1133.63" cy="1119.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1090.73" cy="1247.98" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1108.95" cy="1444.73" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1153.05" cy="1601.45" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1272.65" cy="670.08" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1277.85" cy="820.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1267.88" cy="954.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1257.9" cy="1155.69" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1298.67" cy="1311.31" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1287.84" cy="1405.5" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1307.04" cy="1583.33" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1449.79" cy="536.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1415.63" cy="681.44" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1455.54" cy="821.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1423.51" cy="949.91" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1425.9" cy="1096.21" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1406.47" cy="1252.03" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1445.82" cy="1422.06" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1458.84" cy="1577.19" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1586.12" cy="518.52" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1571.6" cy="677.36" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1569" cy="799.24" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1607.72" cy="990.82" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1558.15" cy="1131.91" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1578.37" cy="1288.97" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1560.74" cy="1449.14" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1601.28" cy="1551.76" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1743.78" cy="252.83" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1720.25" cy="355.33" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1689.49" cy="494.08" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1735.86" cy="694.75" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1757.82" cy="951.97" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1696.23" cy="1136.79" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1759.67" cy="1273.46" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1704.33" cy="1454.5" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1708.24" cy="1563.01" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1880.4" cy="44.66" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1857.31" cy="192.05" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1879.25" cy="367.93" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1885.42" cy="495.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1888.22" cy="661.02" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1893.08" cy="792.08" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1896.39" cy="1002.25" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1906.08" cy="1294.56" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1901.44" cy="1409.86" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1898.51" cy="1557.98" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2002.22" cy="-73.01" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1988.35" cy="93.56" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1994.69" cy="212.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2003.83" cy="393.85" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2013.22" cy="497.68" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2055.96" cy="651.3" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1996.21" cy="853.71" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="1995.51" cy="980.02" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2015.66" cy="1100.63" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2026.2" cy="1258.87" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2046.17" cy="1417.15" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2028.2" cy="1568.72" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2148.26" cy="-84.49" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2177.52" cy="55.6" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2174.79" cy="204.38" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2163.58" cy="382.19" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2186.79" cy="521.39" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2155.39" cy="709.54" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2211.96" cy="852.77" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2157.02" cy="954.01" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2144.51" cy="1152.46" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2203.23" cy="1265.96" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2176.15" cy="1439.76" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2177.39" cy="1594.58" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2309.26" cy="-83.94" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2337.41" cy="87.69" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2339.57" cy="224.82" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2360.59" cy="381.54" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2289.47" cy="509.7" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2340.17" cy="655.58" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2358.21" cy="792.23" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2308.76" cy="960.6" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2330.26" cy="1270.13" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2346.86" cy="1460.92" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2317.61" cy="1552.54" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2459.11" cy="-53.9" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2446.03" cy="244.28" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2440.1" cy="404.24" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2458.62" cy="494.27" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2460.47" cy="663.42" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2442.22" cy="1007.07" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2466.97" cy="1125.63" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2491.66" cy="1274.95" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2484.73" cy="1551.33" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2656.4" cy="-90.22" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2602.58" cy="40.63" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2625.37" cy="238.68" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2599.08" cy="363.88" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2618.55" cy="555.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2626.74" cy="706.7" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2611.31" cy="810.63" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2633.21" cy="939.55" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2662.02" cy="1128.73" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2641.13" cy="1299.68" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2634.91" cy="1401.48" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2753.25" cy="-81.81" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2751.09" cy="92.22" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2783.94" cy="201.94" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2737.92" cy="523.67" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2803.49" cy="658.1" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2779.73" cy="792.73" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2771.97" cy="969.32" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2739.98" cy="1117.47" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2795.7" cy="1248.85" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2803.62" cy="1544.58" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2932.67" cy="-106.5" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2896.29" cy="66.62" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2950.37" cy="207.76" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2954.47" cy="340.87" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2958.37" cy="544.59" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2932.87" cy="683.17" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2894.1" cy="835.85" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2954.81" cy="946.82" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2896.03" cy="1248.4" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="2923.34" cy="1605.8" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3102.44" cy="-65.89" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3066.94" cy="52.71" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3073.65" cy="210.02" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3104.99" cy="361.93" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3079.39" cy="525.17" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3055.08" cy="691.68" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3111.72" cy="805.16" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3077.81" cy="952.25" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3088.17" cy="1115.53" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3085.98" cy="1238.72" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3064.28" cy="1416.73" fill="rgba(60, 19, 101, 1)"></circle>
                    <circle r="5" cx="3075.47" cy="1565.93" fill="rgba(60, 19, 101, 1)"></circle>
                    <path d="M-61.78 1269.96L-61.78 1269.96" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-61.78 1269.96L-64.86 1406.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-61.78 1269.96L83.66 1312.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-61.78 1269.96L76.19 1425.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-61.78 1269.96L83.64 1550.92" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M262.2 1394.15L262.2 1394.15" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M262.2 1394.15L355.15 1451.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M262.2 1394.15L259.55 1272.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.25 1291.73L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.25 1291.73L669.33 1394.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.25 1291.73L527.05 1296.06" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M851.35 1402.72L851.35 1402.72" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M851.35 1402.72L950.19 1423.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1149.24 1111.02" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1245.33 1088.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1090.63 1274.34" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L973.78 1142.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1277.8 1248.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1008.84 1292.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1149.24 1111.02L1392.29 1246.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1409.36 1545.39" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1296.31 1582.3" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1437.42 1401.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1548.45 1601.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1409.36 1545.39L1560.73 1400.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1548.45 1601.52L1548.45 1601.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1548.45 1601.52L1731.13 1541.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1548.45 1601.52L1560.73 1400.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1548.45 1601.52L1437.42 1401.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1847.89 1288.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1990.68 1259.46" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1701.81 1253.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1906.1 1135.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1883.17 1457" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1847.89 1288.57L1722.18 1156.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L2058.49 1576.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L2037.43 1455.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L2181.41 1605.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L1881.57 1589.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L2170.69 1417.76" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2058.49 1576.27L1883.17 1457" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2201.36 532.6L2201.36 532.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2201.36 532.6L2296.15 504.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2201.36 532.6L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2201.36 532.6L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2204.03 954.12L2204.03 954.12" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2204.03 954.12L2319.34 1010.66" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2319.34 1010.66" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2342.1 1152.94" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2450.31 1133.11" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2154.95 1097.81" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2503.41 954.7" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2319.34 1010.66L2326.87 805.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2304.06 1295.1L2304.06 1295.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2304.06 1295.1L2211.01 1269.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2304.06 1295.1L2342.1 1152.94" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2304.06 1295.1L2469.97 1278.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2304.06 1295.1L2340.04 1462.25" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2340.04 1462.25L2340.04 1462.25" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2340.04 1462.25L2441.12 1565.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2340.04 1462.25L2493.78 1448.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2591.31 -48.02L2591.31 -48.02" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2591.31 -48.02L2616.85 68.2" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2591.31 -48.02L2452.96 -88.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2591.31 -48.02L2451.27 57.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2591.31 -48.02L2764.1 -100.86" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2616.85 68.2L2616.85 68.2" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2616.85 68.2L2775.52 70.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2616.85 68.2L2451.27 57.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2616.85 68.2L2753.89 199.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L2764.1 -100.86" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L2917.62 -54.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L2775.52 70.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L2616.85 68.2" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2764.1 -100.86L3056.62 -50.56" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2770.17 1106.24L2770.17 1106.24" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2770.17 1106.24L2771.05 954.17" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2770.17 1106.24L2609.4 1104.4" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2770.17 1106.24L2747.26 1273.93" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2770.17 1106.24L2944.95 1108.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L2890.96 957.19" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L2771.05 954.17" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L2923.48 803.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L2944.95 1108.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L2770.17 1106.24" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L3085.82 993.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2890.96 957.19L3060.43 1095.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3039.3 51.95L3039.3 51.95" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3039.3 51.95L3056.62 -50.56" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3039.3 51.95L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3039.3 51.95L2917.62 -54.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3098.59 537.87L3098.59 537.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3098.59 537.87L3098.78 695.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3060.43 1095.5L3060.43 1095.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3060.43 1095.5L3085.82 993.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3060.43 1095.5L2944.95 1108.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L3088.96 1609.19" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L3101.14 1391.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L2953.21 1422.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L2801.18 1456.83" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.96 1609.19L2738.09 1582.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-64.86 1406.77L-64.86 1406.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-64.86 1406.77L76.19 1425.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-87.51 1596.98L-87.51 1596.98" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-87.51 1596.98L83.64 1550.92" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-87.51 1596.98L-64.86 1406.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-87.51 1596.98L76.19 1425.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M-87.51 1596.98L-61.78 1269.96" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.66 1312.27L83.66 1312.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.66 1312.27L76.19 1425.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.66 1312.27L-64.86 1406.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.66 1312.27L259.55 1272.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M76.19 1425.01L76.19 1425.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M76.19 1425.01L83.64 1550.92" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.64 1550.92L83.64 1550.92" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M83.64 1550.92L254.13 1544.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M259.55 1272.35L259.55 1272.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M259.55 1272.35L402.62 1310.08" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M254.13 1544.33L254.13 1544.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M254.13 1544.33L355.15 1451.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M254.13 1544.33L387.96 1609.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L402.62 1310.08" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L527.05 1296.06" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L491.32 1428.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L355.15 1451.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L262.2 1394.15" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M402.62 1310.08L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M355.15 1451.36L355.15 1451.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M355.15 1451.36L491.32 1428.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M355.15 1451.36L387.96 1609.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M355.15 1451.36L259.55 1272.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M387.96 1609.52L387.96 1609.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M387.96 1609.52L533.95 1562.85" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M527.05 1296.06L527.05 1296.06" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M527.05 1296.06L491.32 1428.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M491.32 1428.35L491.32 1428.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M491.32 1428.35L533.95 1562.85" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M491.32 1428.35L669.33 1394.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M491.32 1428.35L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M533.95 1562.85L533.95 1562.85" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M533.95 1562.85L661.38 1541.39" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M533.95 1562.85L355.15 1451.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M533.95 1562.85L669.33 1394.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.89 1158.68L640.89 1158.68" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.89 1158.68L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.89 1158.68L527.05 1296.06" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.89 1158.68L841.47 1133.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M640.89 1158.68L669.33 1394.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M669.33 1394.84L669.33 1394.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M669.33 1394.84L661.38 1541.39" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M669.33 1394.84L527.05 1296.06" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M661.38 1541.39L661.38 1541.39" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M661.38 1541.39L794 1540.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M661.38 1541.39L491.32 1428.35" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M661.38 1541.39L851.35 1402.72" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M661.38 1541.39L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M841.47 1133.88L841.47 1133.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M841.47 1133.88L973.78 1142.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M841.47 1133.88L853.85 1266.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M841.47 1133.88L1008.84 1292.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M841.47 1133.88L640.25 1291.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M853.85 1266.61L853.85 1266.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M853.85 1266.61L851.35 1402.72" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M853.85 1266.61L1008.84 1292.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M794 1540.04L794 1540.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M794 1540.04L851.35 1402.72" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M973.78 1142.71L973.78 1142.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M973.78 1142.71L1008.84 1292.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1008.84 1292.28L1008.84 1292.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1008.84 1292.28L1090.63 1274.34" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1008.84 1292.28L950.19 1423.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M950.19 1423.05L950.19 1423.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M950.19 1423.05L940.07 1601.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M950.19 1423.05L853.85 1266.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M950.19 1423.05L1137.09 1402.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M950.19 1423.05L794 1540.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M940.07 1601.77L940.07 1601.77" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M940.07 1601.77L794 1540.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M940.07 1601.77L1108.47 1595.89" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M940.07 1601.77L851.35 1402.72" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M940.07 1601.77L1137.09 1402.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1090.63 1274.34L1090.63 1274.34" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1090.63 1274.34L1137.09 1402.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1090.63 1274.34L973.78 1142.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1090.63 1274.34L1277.8 1248.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1137.09 1402.26L1137.09 1402.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1137.09 1402.26L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L1108.47 1595.89" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L1296.31 1582.3" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L1137.09 1402.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L950.19 1423.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1108.47 1595.89L1409.36 1545.39" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1245.33 1088.73L1245.33 1088.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1277.8 1248.27L1277.8 1248.27" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1277.8 1248.27L1392.29 1246.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1277.8 1248.27L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1277.8 1248.27L1245.33 1088.73" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1303.5 1388.47L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1303.5 1388.47L1437.42 1401.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1296.31 1582.3L1296.31 1582.3" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1296.31 1582.3L1303.5 1388.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1449.23 1123.82L1449.23 1123.82" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1449.23 1123.82L1563.81 1107.75" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1449.23 1123.82L1392.29 1246.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1392.29 1246.47L1392.29 1246.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1437.42 1401.52L1437.42 1401.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1437.42 1401.52L1560.73 1400.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1437.42 1401.52L1392.29 1246.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1599.89 971.04L1599.89 971.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1599.89 971.04L1563.81 1107.75" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1599.89 971.04L1449.23 1123.82" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1563.81 1107.75L1563.81 1107.75" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1563.81 1107.75L1722.18 1156.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1560.73 1400.5L1560.73 1400.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1560.73 1400.5L1701.81 1253.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1560.73 1400.5L1731.13 1541.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1722.18 1156.16L1722.18 1156.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1722.18 1156.16L1701.81 1253.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1722.18 1156.16L1906.1 1135.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1722.18 1156.16L1599.89 971.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1722.18 1156.16L1838.81 958.42" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1701.81 1253.09L1701.81 1253.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1701.81 1253.09L1563.81 1107.75" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1731.13 1541.29L1731.13 1541.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1731.13 1541.29L1881.57 1589.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1731.13 1541.29L1883.17 1457" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1869.42 803.14L1869.42 803.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1869.42 803.14L1838.81 958.42" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1838.81 958.42L1838.81 958.42" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1838.81 958.42L1906.1 1135.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1838.81 958.42L1599.89 971.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1838.81 958.42L2043.81 826.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1906.1 1135.1L1906.1 1135.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1906.1 1135.1L1990.68 1259.46" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1906.1 1135.1L1701.81 1253.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1883.17 1457L1883.17 1457" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1883.17 1457L1881.57 1589.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1883.17 1457L2037.43 1455.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1881.57 1589.14L1881.57 1589.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L1988.99 671.59" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L2043.81 826.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L1869.42 803.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L2168.28 793.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1988.99 671.59L2201.36 532.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2043.81 826.52L2043.81 826.52" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2043.81 826.52L2168.28 793.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2043.81 826.52L1869.42 803.14" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2043.81 826.52L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2043.81 826.52L2204.03 954.12" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1990.68 1259.46L1990.68 1259.46" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M1990.68 1259.46L2037.43 1455.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2037.43 1455.9L2037.43 1455.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2037.43 1455.9L2170.69 1417.76" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2186.04 698.09L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2186.04 698.09L2168.28 793.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2186.04 698.09L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2168.28 793.99L2168.28 793.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2154.95 1097.81L2154.95 1097.81" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2154.95 1097.81L2204.03 954.12" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2154.95 1097.81L2211.01 1269.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2154.95 1097.81L2342.1 1152.94" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2154.95 1097.81L1990.68 1259.46" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2211.01 1269.38L2211.01 1269.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2211.01 1269.38L2170.69 1417.76" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2211.01 1269.38L2342.1 1152.94" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2170.69 1417.76L2170.69 1417.76" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2170.69 1417.76L2340.04 1462.25" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2170.69 1417.76L2304.06 1295.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2170.69 1417.76L2181.41 1605.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2181.41 1605.16L2181.41 1605.16" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2181.41 1605.16L2037.43 1455.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2181.41 1605.16L2340.04 1462.25" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2333.12 371.63" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2296.15 504.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2437.83 261.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2498.26 368.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2201.36 532.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2333.12 371.63L2455.21 552.03" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2296.15 504.8L2296.15 504.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2296.15 504.8L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2296.15 504.8L2455.21 552.03" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2296.15 504.8L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2296.15 504.8L2469.07 674.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2292.24 657.01L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2326.87 805.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2455.55 794.18" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2168.28 793.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2186.04 698.09" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2326.87 805.99L2204.03 954.12" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2342.1 1152.94L2342.1 1152.94" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2342.1 1152.94L2450.31 1133.11" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2452.96 -88.5L2452.96 -88.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2452.96 -88.5L2451.27 57.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2452.96 -88.5L2616.85 68.2" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2451.27 57.28L2451.27 57.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2437.83 261.05" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2498.26 368.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2451.27 57.28" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2650.73 346.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2616.85 68.2" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2437.83 261.05L2296.15 504.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2498.26 368.9L2498.26 368.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2498.26 368.9L2650.73 346.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.21 552.03L2455.21 552.03" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.21 552.03L2469.07 674.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.21 552.03L2615.59 547.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.21 552.03L2498.26 368.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.21 552.03L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.07 674.1L2469.07 674.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.07 674.1L2455.55 794.18" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.07 674.1L2292.24 657.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.07 674.1L2657.55 659.24" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.07 674.1L2615.59 547.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.55 794.18L2455.55 794.18" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.55 794.18L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2455.55 794.18L2503.41 954.7" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2503.41 954.7L2503.41 954.7" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2503.41 954.7L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2503.41 954.7L2609.4 1104.4" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2503.41 954.7L2450.31 1133.11" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2503.41 954.7L2326.87 805.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2450.31 1133.11L2450.31 1133.11" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2450.31 1133.11L2469.97 1278.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.97 1278.78L2469.97 1278.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2469.97 1278.78L2605.78 1296.67" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2493.78 1448.87L2493.78 1448.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2493.78 1448.87L2441.12 1565.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2493.78 1448.87L2651.13 1416.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2441.12 1565.78L2441.12 1565.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2441.12 1565.78L2654.26 1601.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2650.73 346.38L2650.73 346.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2650.73 346.38L2787.52 343.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2650.73 346.38L2753.89 199.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2615.59 547.1L2615.59 547.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2615.59 547.1L2657.55 659.24" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2615.59 547.1L2755.83 508.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2615.59 547.1L2650.73 346.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2657.55 659.24L2657.55 659.24" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2657.55 659.24L2776.41 711.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2657.55 659.24L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2657.55 659.24L2755.83 508.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2600.97 823.29L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2609.4 1104.4L2609.4 1104.4" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2609.4 1104.4L2450.31 1133.11" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2609.4 1104.4L2605.78 1296.67" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2605.78 1296.67L2605.78 1296.67" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2605.78 1296.67L2651.13 1416.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2605.78 1296.67L2747.26 1273.93" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2651.13 1416.1L2651.13 1416.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2651.13 1416.1L2801.18 1456.83" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2651.13 1416.1L2747.26 1273.93" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2651.13 1416.1L2654.26 1601.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2654.26 1601.9L2654.26 1601.9" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2654.26 1601.9L2738.09 1582.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2775.52 70.36L2775.52 70.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2775.52 70.36L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2775.52 70.36L2753.89 199.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2775.52 70.36L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2753.89 199.61L2753.89 199.61" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2753.89 199.61L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2753.89 199.61L2787.52 343.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2753.89 199.61L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2787.52 343.71L2787.52 343.71" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2787.52 343.71L2755.83 508.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2787.52 343.71L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2787.52 343.71L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2787.52 343.71L2615.59 547.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2755.83 508.8L2755.83 508.8" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2755.83 508.8L2650.73 346.38" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2755.83 508.8L2776.41 711.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2776.41 711.04L2776.41 711.04" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2776.41 711.04L2923.48 803.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2776.41 711.04L2950.93 678.53" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2776.41 711.04L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2771.05 954.17L2771.05 954.17" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2771.05 954.17L2923.48 803.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2771.05 954.17L2600.97 823.29" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2771.05 954.17L2609.4 1104.4" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2747.26 1273.93L2747.26 1273.93" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2747.26 1273.93L2891.97 1287.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2747.26 1273.93L2801.18 1456.83" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2747.26 1273.93L2609.4 1104.4" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2801.18 1456.83L2801.18 1456.83" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2801.18 1456.83L2738.09 1582.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2801.18 1456.83L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2801.18 1456.83L2953.21 1422.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2738.09 1582.36L2738.09 1582.36" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2738.09 1582.36L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2738.09 1582.36L2651.13 1416.1" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2738.09 1582.36L2953.21 1422.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2738.09 1582.36L2493.78 1448.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2917.62 -54.47L2917.62 -54.47" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2917.62 -54.47L3056.62 -50.56" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2917.62 -54.47L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2897.1 110.33L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2897.1 110.33L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2898.07 200.97L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2950.93 678.53L2950.93 678.53" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2950.93 678.53L2923.48 803.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2950.93 678.53L3098.78 695.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2950.93 678.53L3098.59 537.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2923.48 803.99L2923.48 803.99" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2923.48 803.99L3111.98 855.81" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2944.95 1108.6L2944.95 1108.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2891.97 1287.78L2891.97 1287.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2891.97 1287.78L2953.21 1422.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2953.21 1422.57L2953.21 1422.57" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2953.21 1422.57L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2953.21 1422.57L3101.14 1391.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M2916.83 1538.84L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3056.62 -50.56L3056.62 -50.56" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3056.62 -50.56L2897.1 110.33" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.61 216.62L3088.61 216.62" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.61 216.62L3089.09 375.86" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.61 216.62L3039.3 51.95" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3088.61 216.62L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3089.09 375.86L3089.09 375.86" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3089.09 375.86L3098.59 537.87" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3089.09 375.86L2898.07 200.97" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3098.78 695.26L3098.78 695.26" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3098.78 695.26L3111.98 855.81" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3111.98 855.81L3111.98 855.81" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3111.98 855.81L3085.82 993.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3111.98 855.81L2950.93 678.53" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3085.82 993.88L3085.82 993.88" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3085.82 993.88L2944.95 1108.6" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3101.14 1391.01L3101.14 1391.01" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3101.14 1391.01L2891.97 1287.78" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3101.14 1391.01L2916.83 1538.84" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <path d="M3101.14 1391.01L3060.43 1095.5" stroke="hsl(285.79999999999995, 77.2%, 51.5%)" stroke-width="1.5"></path>
                    <circle r="25" cx="-61.78" cy="1269.96" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="262.2" cy="1394.15" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="640.25" cy="1291.73" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="851.35" cy="1402.72" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="1149.24" cy="1111.02" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="1409.36" cy="1545.39" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="1548.45" cy="1601.52" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="1847.89" cy="1288.57" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2058.49" cy="1576.27" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2201.36" cy="532.6" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2204.03" cy="954.12" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2319.34" cy="1010.66" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2304.06" cy="1295.1" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2340.04" cy="1462.25" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2591.31" cy="-48.02" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2616.85" cy="68.2" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2764.1" cy="-100.86" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2770.17" cy="1106.24" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="2890.96" cy="957.19" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="3039.3" cy="51.95" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="3098.59" cy="537.87" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="3060.43" cy="1095.5" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="25" cx="3088.96" cy="1609.19" fill="url(&quot;#SvgjsRadialGradient1026&quot;)"></circle>
                    <circle r="5" cx="-64.86" cy="1406.77" fill="#c78bd9"></circle>
                    <circle r="5" cx="-87.51" cy="1596.98" fill="#c78bd9"></circle>
                    <circle r="5" cx="83.66" cy="1312.27" fill="#c78bd9"></circle>
                    <circle r="5" cx="76.19" cy="1425.01" fill="#c78bd9"></circle>
                    <circle r="5" cx="83.64" cy="1550.92" fill="#c78bd9"></circle>
                    <circle r="5" cx="259.55" cy="1272.35" fill="#c78bd9"></circle>
                    <circle r="5" cx="254.13" cy="1544.33" fill="#c78bd9"></circle>
                    <circle r="5" cx="402.62" cy="1310.08" fill="#c78bd9"></circle>
                    <circle r="5" cx="355.15" cy="1451.36" fill="#c78bd9"></circle>
                    <circle r="5" cx="387.96" cy="1609.52" fill="#c78bd9"></circle>
                    <circle r="5" cx="527.05" cy="1296.06" fill="#c78bd9"></circle>
                    <circle r="5" cx="491.32" cy="1428.35" fill="#c78bd9"></circle>
                    <circle r="5" cx="533.95" cy="1562.85" fill="#c78bd9"></circle>
                    <circle r="5" cx="640.89" cy="1158.68" fill="#c78bd9"></circle>
                    <circle r="5" cx="669.33" cy="1394.84" fill="#c78bd9"></circle>
                    <circle r="5" cx="661.38" cy="1541.39" fill="#c78bd9"></circle>
                    <circle r="5" cx="841.47" cy="1133.88" fill="#c78bd9"></circle>
                    <circle r="5" cx="853.85" cy="1266.61" fill="#c78bd9"></circle>
                    <circle r="5" cx="794" cy="1540.04" fill="#c78bd9"></circle>
                    <circle r="5" cx="973.78" cy="1142.71" fill="#c78bd9"></circle>
                    <circle r="5" cx="1008.84" cy="1292.28" fill="#c78bd9"></circle>
                    <circle r="5" cx="950.19" cy="1423.05" fill="#c78bd9"></circle>
                    <circle r="5" cx="940.07" cy="1601.77" fill="#c78bd9"></circle>
                    <circle r="5" cx="1090.63" cy="1274.34" fill="#c78bd9"></circle>
                    <circle r="5" cx="1137.09" cy="1402.26" fill="#c78bd9"></circle>
                    <circle r="5" cx="1108.47" cy="1595.89" fill="#c78bd9"></circle>
                    <circle r="5" cx="1245.33" cy="1088.73" fill="#c78bd9"></circle>
                    <circle r="5" cx="1277.8" cy="1248.27" fill="#c78bd9"></circle>
                    <circle r="5" cx="1303.5" cy="1388.47" fill="#c78bd9"></circle>
                    <circle r="5" cx="1296.31" cy="1582.3" fill="#c78bd9"></circle>
                    <circle r="5" cx="1449.23" cy="1123.82" fill="#c78bd9"></circle>
                    <circle r="5" cx="1392.29" cy="1246.47" fill="#c78bd9"></circle>
                    <circle r="5" cx="1437.42" cy="1401.52" fill="#c78bd9"></circle>
                    <circle r="5" cx="1599.89" cy="971.04" fill="#c78bd9"></circle>
                    <circle r="5" cx="1563.81" cy="1107.75" fill="#c78bd9"></circle>
                    <circle r="5" cx="1560.73" cy="1400.5" fill="#c78bd9"></circle>
                    <circle r="5" cx="1722.18" cy="1156.16" fill="#c78bd9"></circle>
                    <circle r="5" cx="1701.81" cy="1253.09" fill="#c78bd9"></circle>
                    <circle r="5" cx="1731.13" cy="1541.29" fill="#c78bd9"></circle>
                    <circle r="5" cx="1869.42" cy="803.14" fill="#c78bd9"></circle>
                    <circle r="5" cx="1838.81" cy="958.42" fill="#c78bd9"></circle>
                    <circle r="5" cx="1906.1" cy="1135.1" fill="#c78bd9"></circle>
                    <circle r="5" cx="1883.17" cy="1457" fill="#c78bd9"></circle>
                    <circle r="5" cx="1881.57" cy="1589.14" fill="#c78bd9"></circle>
                    <circle r="5" cx="1988.99" cy="671.59" fill="#c78bd9"></circle>
                    <circle r="5" cx="2043.81" cy="826.52" fill="#c78bd9"></circle>
                    <circle r="5" cx="1990.68" cy="1259.46" fill="#c78bd9"></circle>
                    <circle r="5" cx="2037.43" cy="1455.9" fill="#c78bd9"></circle>
                    <circle r="5" cx="2186.04" cy="698.09" fill="#c78bd9"></circle>
                    <circle r="5" cx="2168.28" cy="793.99" fill="#c78bd9"></circle>
                    <circle r="5" cx="2154.95" cy="1097.81" fill="#c78bd9"></circle>
                    <circle r="5" cx="2211.01" cy="1269.38" fill="#c78bd9"></circle>
                    <circle r="5" cx="2170.69" cy="1417.76" fill="#c78bd9"></circle>
                    <circle r="5" cx="2181.41" cy="1605.16" fill="#c78bd9"></circle>
                    <circle r="5" cx="2333.12" cy="371.63" fill="#c78bd9"></circle>
                    <circle r="5" cx="2296.15" cy="504.8" fill="#c78bd9"></circle>
                    <circle r="5" cx="2292.24" cy="657.01" fill="#c78bd9"></circle>
                    <circle r="5" cx="2326.87" cy="805.99" fill="#c78bd9"></circle>
                    <circle r="5" cx="2342.1" cy="1152.94" fill="#c78bd9"></circle>
                    <circle r="5" cx="2452.96" cy="-88.5" fill="#c78bd9"></circle>
                    <circle r="5" cx="2451.27" cy="57.28" fill="#c78bd9"></circle>
                    <circle r="5" cx="2437.83" cy="261.05" fill="#c78bd9"></circle>
                    <circle r="5" cx="2498.26" cy="368.9" fill="#c78bd9"></circle>
                    <circle r="5" cx="2455.21" cy="552.03" fill="#c78bd9"></circle>
                    <circle r="5" cx="2469.07" cy="674.1" fill="#c78bd9"></circle>
                    <circle r="5" cx="2455.55" cy="794.18" fill="#c78bd9"></circle>
                    <circle r="5" cx="2503.41" cy="954.7" fill="#c78bd9"></circle>
                    <circle r="5" cx="2450.31" cy="1133.11" fill="#c78bd9"></circle>
                    <circle r="5" cx="2469.97" cy="1278.78" fill="#c78bd9"></circle>
                    <circle r="5" cx="2493.78" cy="1448.87" fill="#c78bd9"></circle>
                    <circle r="5" cx="2441.12" cy="1565.78" fill="#c78bd9"></circle>
                    <circle r="5" cx="2650.73" cy="346.38" fill="#c78bd9"></circle>
                    <circle r="5" cx="2615.59" cy="547.1" fill="#c78bd9"></circle>
                    <circle r="5" cx="2657.55" cy="659.24" fill="#c78bd9"></circle>
                    <circle r="5" cx="2600.97" cy="823.29" fill="#c78bd9"></circle>
                    <circle r="5" cx="2609.4" cy="1104.4" fill="#c78bd9"></circle>
                    <circle r="5" cx="2605.78" cy="1296.67" fill="#c78bd9"></circle>
                    <circle r="5" cx="2651.13" cy="1416.1" fill="#c78bd9"></circle>
                    <circle r="5" cx="2654.26" cy="1601.9" fill="#c78bd9"></circle>
                    <circle r="5" cx="2775.52" cy="70.36" fill="#c78bd9"></circle>
                    <circle r="5" cx="2753.89" cy="199.61" fill="#c78bd9"></circle>
                    <circle r="5" cx="2787.52" cy="343.71" fill="#c78bd9"></circle>
                    <circle r="5" cx="2755.83" cy="508.8" fill="#c78bd9"></circle>
                    <circle r="5" cx="2776.41" cy="711.04" fill="#c78bd9"></circle>
                    <circle r="5" cx="2771.05" cy="954.17" fill="#c78bd9"></circle>
                    <circle r="5" cx="2747.26" cy="1273.93" fill="#c78bd9"></circle>
                    <circle r="5" cx="2801.18" cy="1456.83" fill="#c78bd9"></circle>
                    <circle r="5" cx="2738.09" cy="1582.36" fill="#c78bd9"></circle>
                    <circle r="5" cx="2917.62" cy="-54.47" fill="#c78bd9"></circle>
                    <circle r="5" cx="2897.1" cy="110.33" fill="#c78bd9"></circle>
                    <circle r="5" cx="2898.07" cy="200.97" fill="#c78bd9"></circle>
                    <circle r="5" cx="2950.93" cy="678.53" fill="#c78bd9"></circle>
                    <circle r="5" cx="2923.48" cy="803.99" fill="#c78bd9"></circle>
                    <circle r="5" cx="2944.95" cy="1108.6" fill="#c78bd9"></circle>
                    <circle r="5" cx="2891.97" cy="1287.78" fill="#c78bd9"></circle>
                    <circle r="5" cx="2953.21" cy="1422.57" fill="#c78bd9"></circle>
                    <circle r="5" cx="2916.83" cy="1538.84" fill="#c78bd9"></circle>
                    <circle r="5" cx="3056.62" cy="-50.56" fill="#c78bd9"></circle>
                    <circle r="5" cx="3088.61" cy="216.62" fill="#c78bd9"></circle>
                    <circle r="5" cx="3089.09" cy="375.86" fill="#c78bd9"></circle>
                    <circle r="5" cx="3098.78" cy="695.26" fill="#c78bd9"></circle>
                    <circle r="5" cx="3111.98" cy="855.81" fill="#c78bd9"></circle>
                    <circle r="5" cx="3085.82" cy="993.88" fill="#c78bd9"></circle>
                    <circle r="5" cx="3101.14" cy="1391.01" fill="#c78bd9"></circle>
                </g>
                <defs>
                    <mask id="SvgjsMask1024">
                        <rect width="3000" height="1500" fill="#ffffff"></rect>
                    </mask>
                    <linearGradient x1="12.5%" y1="-25%" x2="87.5%" y2="125%" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1025">
                        <stop stop-color="rgba(70, 14, 71, 1)" offset="0"></stop>
                        <stop stop-color="rgba(0, 0, 0, 1)" offset="1"></stop>
                    </linearGradient>
                    <radialGradient id="SvgjsRadialGradient1026">
                        <stop stop-color="#ffffff" offset="0.1"></stop>
                        <stop stop-color="rgba(142, 23, 179, 1)" offset="0.2"></stop>
                        <stop stop-color="rgba(142, 23, 179, 0)" offset="1"></stop>
                    </radialGradient>
                </defs>
            </svg>
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="purple"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div class="cttt">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Purple is better</h2>
                            </div>
                            
                        </div>
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="https://laravel.com/docs"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFFFFF]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="purple" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="purple" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a
                                href="https://laracasts.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFFFFF]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="purple"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                    </p>
                                </div>
                            </a>

                            <a
                                href="https://laravel-news.com"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFFFFF]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="purple"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                    </p>
                                </div>
                            </a>

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FFFFFF]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="purple">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>, <a href="https://vapor.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>, <a href="https://nova.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>, <a href="https://envoyer.io" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>, and <a href="https://herd.laravel.com" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>, <a href="https://laravel.com/docs/horizon" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>, and more.
                                    </p>
                                </div>
                                
                            </div>
                          
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
