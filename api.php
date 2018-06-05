<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head_info.php'; ?>
	<?php include 'includes/head_files.php'; ?>
	
	<?php include 'includes/title.php'; ?>
	
	<!--Page Specific CSS -->
	<style>
	.tab {
		margin-left: 30px;
	}
</style>

<?php include 'includes/google_analytics.php'; ?>
</head>

<body>
	<?php include 'includes/navbar.php'; ?>

	<!-- Begin page content -->
	<div class="container">
		<div class="page-header">
			<h1>API Documentation</h1>
		</div>
		
		<h2 id="what">What is the when2water API?</h2>
		<div class="tab"><p class="lead">
			Our API allows anybody to utilize when2water decisions in their own projects. 
			For example, someone creating their own irrigation controller could use our API to 
			get irrigation decisions, allowing them to reduce wasteful irrigation and save themselves
			water, electricity, and money.
		</p></div>
		
		<hr />
		
		<h2 id="overview">Overview</h2>
		<div class="tab"><p class="lead">
			The API endpoint is at <code>https://api.when2water.org/</code>.
			All API requests will begin with the endpoint.
			The API is <a href="http://en.wikipedia.org/wiki/Representational_state_transfer" target="_blank">RESTful</a>.
			It accepts parameters through the <a href="http://en.wikipedia.org/wiki/Query_string" target="_blank">query string</a>.
			The API can return either unformatted data or <a href="http://en.wikipedia.org/wiki/JSON" target="_blank">JSON</a> formatted data.
			This service is <i>free and always will be</i>.
		</p></div>
		
		<h2 id="parameters">Sending Parameters</h2>
		<div class="tab">
			<p class="lead">
				Parameters are sent through HTTP Get (Query String). Currently, the API accepts two parameters.
			</p>
			<table class="table">
				<thead>
					<tr>
						<th>Parameter</th>
						<th>Example</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>zip</td>
						<td>90210</td>
						<td>Required. This is the zip code you would like a decision for.</td>
					</tr>
					<tr>
						<td>json</td>
						<td>true</td>
						<td>Optional. If this parameter is set (to anything), the output will be JSON formatted. If this is not set, the API will respond with unformatted data.</td>
					</tr>
				</tbody>
			</table>
			<p class="lead">
				Example: Sending Parameters
				<br />
				<pre>$ curl "http://api.when2water.org/?zip=90210&json=true"</pre>
			</p>
		</div>
		
		<h2 id="response">Response</h2>
		<div class="tab">
			<p class="lead">
				The API will respond with one of five response codes. 
				It does not use <a href="http://en.wikipedia.org/wiki/HTTP_response_codes" target="_blank">HTTP response codes</a>. 
				If it encounters an error, the returned signal will notify you with an error response code,
				but it will still respond with <a href="http://en.wikipedia.org/wiki/HTTP_200#2xx_Success" target="_blank">HTTP 200 OK</a>.
			</p>
			<table class="table">
				<thead>
					<tr>
						<th>Response Code</th>
						<!-- <th>Short Description</th> -->
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<!-- <td>Water</td> -->
						<td>The algorithm determined that there is a need to water for the entered zip code.</td>
					</tr>
					<tr>
						<td>-1</td>
						<!-- <td>No Water</td> -->
						<td>The algorithm determined that there is no need to water for the entered zip code.</td>
					</tr>
					<tr>
						<td>-2</td>
						<!-- <td>Missing Input</td> -->
						<td>A required parameter was missing from the query.</td>
					</tr>
					<tr>
						<td>-3</td>
						<!-- <td>Bad Zip Code</td> -->
						<td>The zip code entered does not exist.</td>
					</tr>
					<tr>
						<td>-4</td>
						<!-- <td>Internal Error</td> -->
						<td>The server encountered an internal error while processing the request.</td>
					</tr>
				</tbody>
			</table>
			<p class="lead">
				If you did not specify <code>json</code> in your query, then the response code will be returned unformatted: <samp>-3</samp>.
				If you did specify <code>json</code> in your query, then the response code will be an integer in the 
				<code>signal</code> variable of the JSON: <samp>{"signal":-3}</samp>.
			</p>
			<p class="lead">
				Example: Getting an Unformatted Response
				<pre>$ curl "api.when2water.org/?zip=99801"
				-1</pre>
			</p>
			<p class="lead">
				Example: Getting a JSON Formatted Response
				<pre>$ curl "api.when2water.org/?zip=99801&json=true"
				{"signal":-1}</pre>
			</p>
			<p class="lead">
				Example: Getting an Error Response Code, and an HTTP 200 OK, from an Invalid Request
				<pre>$ curl -i "api.when2water.org/?zip=99999"
					HTTP/1.1 200 OK
					Date: Sat, 28 Jun 2014 03:41:07 GMT
					Server: Apache mod_fcgid/2.3.10-dev
					X-Powered-By: PHP/5.4.26
					Content-Length: 2
					Content-Type: text/html

				-3</pre>
			</p>
		</div>
		
		<hr />
		
		<p class="lead text-center">
			Questions or feedback? 
			Send us an email at <a href="mailto:info@when2water.org">info@when2water.org</a>.
		</p>
		<!-- <p class="lead">INFO ABOUT RESTRICTION PARAMETER</p> -->
	</div>
	
	<?php include 'includes/footer.php'; ?>
	
	<?php include 'includes/body_end_bootstrap.php'; ?>
</body>
</html>
