/**
 * Parse attributes from Builder into query string
 */

import qs from 'qs';

export default class Parser {

  constructor(builder) {
    this.builder = builder;
    this.uri = '';
  }

  // final query string
  query() {
    this.fields();
    this.filters();
    this.sorts();
    this.page();
    this.searches();
    this.payload();
    return this.uri;
  }

  /**
   * Helpers
   */

  hasFields() {
    return Object.keys(this.builder.fields).length > 0;
  }

  hasFilters() {
    return Object.keys(this.builder.filters).length > 0;
  }

  hasSearch() {
    return Object.keys(this.builder.search).length > 0;
  }

  hasSorts() {
    return this.builder.sorts.length > 0;
  }

  hasPage() {
    return Object.keys(this.builder.pageValue).length > 0;
  }

  hasPayload() {
    return this.builder.payload !== null;
  }

  prepend() {
    return (this.uri === '') ? '?' : '&';
  }

  parameterNames() {
    return this.builder.model.parameterNames();
  }

  /**
   * Parsers
   */

  fields() {
    if (!this.hasFields()) {
      return;
    }

    let fields = { [this.parameterNames().fields]: this.builder.fields };
    this.uri += this.prepend() + qs.stringify(fields, { encode: false });
  }

  filters() {
    if (!this.hasFilters()) {
      return;
    }

    let filters = { [this.parameterNames().filter]: this.builder.filters };
    this.uri += this.prepend() + qs.stringify(filters, { encode: false });
  }

  searches() {
    if (!this.hasSearch()) {
      return;
    }

    let search = { [this.parameterNames().search]: this.builder.search };
    this.uri += this.prepend() + qs.stringify(search, { encode: false });
  }

  sorts() {
    if (!this.hasSorts()) {
      return;
    }

    this.uri += this.prepend() + this.parameterNames().sort + '=' + this.builder.sorts;
  }

  page() {
    if (!this.hasPage()) {
      return;
    }

    let page = { [this.parameterNames().page]: this.builder.pageValue };
    this.uri += this.prepend() + qs.stringify(page, { encode: false });
  }

  payload() {
    if (!this.hasPayload()) {
      return;
    }

    this.uri += this.prepend() + qs.stringify(this.builder.payload, { encode: false });
  }
}