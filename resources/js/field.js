Nova.booting((Vue, router, store) => {
	Vue.component(
		"index-nova-preview-resource",
		require("./components/IndexField")
	);
});
