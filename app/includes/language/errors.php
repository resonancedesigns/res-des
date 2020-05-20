<?php
/***************/
/* This simply rewrites the default language for the error handler. 
/* Just add an if statement like the ones below and customize the
/* text for that error.
/********/
if($error === 'contactName is required') {
	$error = 'Your name is required';
}
if($error === 'contactEmail is required') {
	$error = 'A valid email address is required';
}
if($error === 'projectTitle is required') {
	$error = 'A project title is required';
}
if($error === 'projectDescription is required') {
	$error = 'A project description is required';
}
if($error === 'contactName must be a minimum of 2 characters') {
	$error = 'Your name must be a minimum of 2 characters';
}
if($error === 'contactName must be a maximum of 50 characters') {
	$error = 'Your name must not exceed 50 characters in length';
}
if($error === 'contactEmail must be a maximum of 128 characters') {
	$error = 'Your email must not exceed 128 characters in length';
}