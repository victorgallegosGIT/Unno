const request = (endpoint, service) => {
	const url = endpoint + service
	return {
		get: (optionalParams = null) => url(optionalParams),
		post: (params) => url(params),
		put: (params) => url(params),
		delete: (params) => url(params) 
	}
}