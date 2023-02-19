<template>
	<div :class="`text-${field.textAlign}`">
		<Dropdown>
			<DropdownTrigger class="text-gray-500 inline-flex cursor-pointer" :showArrow="false">
				<span class="link-default font-bold">{{ __('View') }}</span>
			</DropdownTrigger>

			<template #menu>
				<DropdownMenu width="auto">
					<template v-if="field.image !== undefined">
						<img :src="field.image" :alt="__('Photo')" :width="field.width"/>
					</template>
					<ul v-if="field.options.length > 0" class="max-w-xxs space-y-2 py-3 px-4">
						<li v-for="option in field.options"
							class="mb-1 flex rounded-full font-bold text-sm leading-tight space-x-2">
							<span class="ml-1">{{ option.name }}:</span>
							<span class="ml-1">{{ option.label }}</span>
						</li>
					</ul>
					<span v-else>{{ field.noValueText }}</span>
				</DropdownMenu>
			</template>
		</Dropdown>
	</div>
</template>

<script>

export default {
	props: ["field"],

	created() {
		this.field.value = this.field.value || {}
	}
}
</script>

<style scoped>
img {
	display: inline;
}
</style>
