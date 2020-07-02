<template>
  <ais-instant-search
    :search-client="algoliasearch"
    index-name="products_index"
  >
    <!-- Other search components go here -->
    <ais-search-box placeholder="Search contacts..."></ais-search-box>
  <ais-hits></ais-hits>
  </ais-instant-search>
</template>

<script>
import algoliasearch from 'algoliasearch/lite';

export default {
  data() {
    return {
      searchClient: algoliasearch(
        process.env.MIX_ALGOLIA_APP_ID,
        process.env.MIX_ALGOLIA_SEARCH
      ),
    };
  },
};
</script>
