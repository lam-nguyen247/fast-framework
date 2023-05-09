<html>

<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow">
	<style>
		body {
			background-color: #F9F9F9;
			color: #222;
			font: 14px/1.4 Helvetica, Arial, sans-serif;
			margin: 0;
			padding-bottom: 45px;
		}

		a {
			cursor: pointer;
			text-decoration: none;
		}

		a:hover {
			text-decoration: underline;
		}

		abbr[title] {
			border-bottom: none;
			cursor: help;
			text-decoration: none;
		}

		code,
		pre {
			font: 13px/1.5 Consolas, Monaco, Menlo, "Ubuntu Mono", "Liberation Mono", monospace;
		}

		table,
		tr,
		th,
		td {
			background: #FFF;
			border-collapse: collapse;
			vertical-align: top;
		}

		table {
			background: #FFF;
			border: 1px solid #E0E0E0;
			box-shadow: 0px 0px 1px rgba(128, 128, 128, .2);
			margin: 1em 0;
			width: 100%;
		}

		table th,
		table td {
			border: solid #E0E0E0;
			border-width: 1px 0;
			padding: 8px 10px;
		}

		table th {
			background-color: #E0E0E0;
			font-weight: bold;
			text-align: left;
		}

		.hidden-xs-down {
			display: none;
		}

		.block {
			display: block;
		}

		.break-long-words {
			-ms-word-break: break-all;
			word-break: break-all;
			word-break: break-word;
			-webkit-hyphens: auto;
			-moz-hyphens: auto;
			hyphens: auto;
		}

		.text-muted {
			color: #999;
		}

		.container {
			max-width: 1024px;
			margin: 0 auto;
			padding: 0 15px;
		}

		.container::after {
			content: "";
			display: table;
			clear: both;
		}

		.exception-summary {
			background: #ed8936;
			border-bottom: 2px solid rgba(0, 0, 0, 0.1);
			border-top: 1px solid rgba(0, 0, 0, .3);
			flex: 0 0 auto;
			margin-bottom: 30px;
		}

		.exception-message-wrapper {
			display: flex;
			align-items: center;
			min-height: 70px;
		}

		.exception-message {
			flex-grow: 1;
			padding: 30px 0;
		}

		.exception-message,
		.exception-message a {
			color: #FFF;
			font-size: 21px;
			font-weight: 400;
			margin: 0;
		}

		.exception-message.long {
			font-size: 18px;
		}

		.exception-message a {
			border-bottom: 1px solid rgba(255, 255, 255, 0.5);
			font-size: inherit;
			text-decoration: none;
		}

		.exception-message a:hover {
			border-bottom-color: #ffffff;
		}

		.exception-illustration {
			flex-basis: 111px;
			flex-shrink: 0;
			height: 66px;
			margin-left: 15px;
			opacity: .7;
		}

		.trace + .trace {
			margin-top: 30px;
		}

		.trace-head .trace-class {
			color: #222;
			font-size: 18px;
			font-weight: bold;
			line-height: 1.3;
			margin: 0;
			position: relative;
		}

		.trace-message {
			font-size: 14px;
			font-weight: normal;
			margin: .5em 0 0;
		}

		.trace-file-path,
		.trace-file-path a {
			color: #222;
			margin-top: 3px;
			font-size: 13px;
		}

		.trace-class {
			color: #ed8936;
		}

		.trace-type {
			padding: 0 2px;
		}

		.trace-method {
			color: #ed8936;
			font-weight: bold;
		}

		.trace-arguments {
			color: #777;
			font-weight: normal;
			padding-left: 2px;
		}

		@media (min-width: 575px) {
			.hidden-xs-down {
				display: initial;
			}
		}
	</style>
</head>

<body style="margin-bottom: 30px;">
<div class="exception-summary">
	<div class="container">
		<div class="exception-message-wrapper">
			<h1 class="break-long-words exception-message">Looks like something went wrong.</h1>
			<div class="exception-illustration hidden-xs-down">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="trace trace-as-html">
		<table class="trace-details">
			<thead class="trace-head">
			<tr>
				<th>
					<h3 class="trace-class">
						<span class="text-muted">(1/1)</span>
						@php
						$explode = explode("\\", get_class($exception));
						@endphp
						<span class="exception_title"><abbr
								title="{{ get_class($exception) }}">{{ array_pop($explode) }}</abbr></span>
					</h3>
					<p class="break-long-words trace-message">{{ $exception->getMessage() }}</p>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				@php
				$explode = explode("/", $exception->getFile());
				@endphp
				<td><span class="block trace-file-path">in <span
							title="{{ $exception->getFile() }} line 647"><strong>{{ array_pop($explode) }}</strong>
                                    line {{ $exception->getLine() }}</span></td>
				</span></td>
			</tr>

			@foreach($exception->getTrace() as $trace)
			@php
			$file = isset($trace['file']) ? $trace['file'] : '';
			if(!empty($file)) $explode = explode("/", $trace['file']);
			$endFile = isset($explode) ? array_pop($explode) : $file;
			$line = isset($trace['line']) ? $trace['line'] : '';
			$class = isset($trace['class']) ? $trace['class'] : '';
			$function = isset($trace['function']) ? $trace['function'] : '';
			@endphp

			@if(!empty($file))
			<tr>
				<td>at <span class="trace-class">
                                <abbr title="{{ $file }}">{{ $endFile }}</abbr>
                            </span>
					<span class="trace-type">-&gt;</span>
					<span class="trace-method">{{ $function }}</span>()<span class="block trace-file-path">in <span
							title="{{ $file }} line {{ $line}}"><strong>{{ $file }}</strong>
                                    line {{ $line }}</span></span>
				</td>
			</tr>
			@endif
			@endforeach
			</tbody>
		</table>
	</div>

</div>
</body>

</html>