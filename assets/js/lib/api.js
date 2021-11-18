const origin = window.location.origin;
const BASE_URL = `${origin}/app/api`;

class Api {
	constructor() {
		let service = axios.create({
			headers: { csrf: "token" },
		});
		this.service = service;
	}

	async get(url, data = {}, conf = {}) {
		return this.service
			.get(
				`${BASE_URL}${url}`,
				{
					params: data,
				},
				conf
			)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async post(url, data = {}, conf = {}) {
		return this.service
			.post(`${BASE_URL}${url}`, data, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async delete(url, conf = {}) {
		return this.service
			.delete(`${BASE_URL}${url}`, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async head(url, conf = {}) {
		return this.service
			.head(`${BASE_URL}${url}`, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async options(url, conf = {}) {
		return this.service
			.options(`${BASE_URL}${url}`, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async put(url, data = {}, conf = {}) {
		return this.service
			.put(`${BASE_URL}${url}`, data, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}

	async patch(url, data = {}, conf = {}) {
		return this.service
			.patch(`${BASE_URL}${url}`, data, conf)
			.then(response => Promise.resolve(response))
			.catch(error => Promise.reject(error));
	}
}

const api = new Api();
export default api;
