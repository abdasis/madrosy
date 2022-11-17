import './bootstrap';
import Alpine from 'alpinejs';
import {Html5QrcodeScanner} from "html5-qrcode"
import {Html5Qrcode} from "html5-qrcode"
import mask from '@alpinejs/mask'
window.Alpine = Alpine;
Alpine.start();
Alpine.plugin(mask)
