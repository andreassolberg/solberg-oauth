# Solberg-OAuth

A very basic OAuth 2.0 library written in PHP. Making direct use of MongoDB for storage.

I wrote this library, to learn about OAuth. I might use it in some of my own projects. In the future I may decide to prepare this library for public consumption, including code, api clean up and documentation. Until then, feel free to use it on your own risk.


## How to use the Provider

First, setup remote clients (see the storage: clients).



## How to use the Client

First, setup remote providers (see the storage: providers).





## The storage (MongoDB)


### Clients (used by the OAuth Provider)

Collection: `clients`

Example object:

	{
		"client_id" : "test",
		"client_secret" : "secret123",
		"redirect_uri" : "http://bridge.uninett.no/"
	}


### Providers (used by the OAuth Consumer)


Collection: `providers`

Example object:

	{
		"provider_id" : "test1",
		"client_credentials" : {
			"client_id" : "test",
			"client_secret" : "secret123"
		},
		"authorization" : "http://bridge.uninett.no/mongo/server.php/authorization",
		"token" : "http://bridge.uninett.no/mongo/server.php/token"
	}

### Other storage collections

* **codes** includes authorization codes temporarily. Used by the OAuth Provider.
* **tokens** includes permanent cache of Access Tokens. Used by the OAuth Consumer.



## Available here

Source and download available here:

	https://github.com/andreassolberg/solberg-oauth