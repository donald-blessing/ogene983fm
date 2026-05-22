import _ from 'lodash';
window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Security: Axios baseURL Bypass Prevention
 * Ensures that if a baseURL is configured, requests cannot bypass it using absolute URLs.
 * This remediates potential SSRF and credential leakage vulnerabilities.
 */
window.axios.interceptors.request.use((config) => {
    if (config.baseURL) {
        const isAbsolute = /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(config.url);
        if (isAbsolute && !config.url.startsWith(config.baseURL)) {
            throw new Error(`Security Error: Request URL ${config.url} is outside the allowed baseURL ${config.baseURL}`);
        }
    }
    return config;
});

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
