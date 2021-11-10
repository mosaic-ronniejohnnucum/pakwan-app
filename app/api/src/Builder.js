/**
 * Prepare attributes to be parsed
 */

import Parser from './Parser';
import _ from "lodash";

export default class Builder {

  constructor(model) {
    this.model = model;
    this.sorts = [];
    this.pageValue = {};
    this.payload = null;
    this.fields = {};
    this.filters = {};
    this.search = {};

    this.parser = new Parser(this);
  }

  // query string parsed 
  query() {
    return this.parser.query();
  }

  /**
   * Query builder
   */

  select(...fields) {
    if (fields.length === 0) {
      throw new Error('You must specify the fields on select() method.');
    }

    // single entity .select(['age', 'firstname'])
    if (fields[0].constructor === String || Array.isArray(fields[0])) {
      this.fields[this.model.resource()] = fields.join(',');
    }

    // related entities .select({ posts: ['title', 'content'], user: ['age', 'firstname']} )
    if (fields[0].constructor === Object) {
      Object.entries(fields[0]).forEach(([key, value]) => {
        this.fields[key] = value.join(',');
      });
    }

    return this;
  }

  where(key, value) {
    if (key === undefined || value === undefined)
      throw new Error('The KEY and VALUE are required on where() method.');

    if (Array.isArray(value) || value instanceof Object)
      throw new Error('The VALUE must be primitive on where() method.');

    this.filters[key] = value;

    return this;
  }

  find(key, value) {
    if (key === undefined || value === undefined)
      throw new Error('The KEY and VALUE are required on search() method.');

    if (Array.isArray(value) || value instanceof Object)
      throw new Error('The VALUE must be primitive on search() method.');

    if (Array.isArray(key)) {
      key.forEach(element => {
        this.search[element] = value;
      });
      return this;
    }

    this.search[key] = value;

    return this;
  }

  whereIn(key, array) {
    if (!Array.isArray(array))
      throw new Error('The second argument on whereIn() method must be an array.');

    this.filters[key] = array.join(',');

    return this;
  }

  orderBy(...args) {
    this.sorts = args;

    return this;
  }

  pageCount(value) {
    if (!Number.isInteger(value)) {
      throw new Error('The VALUE must be an integer on page() method.');
    }

    this.pageValue.size = value;

    return this;
  }

  pageNumber(value) {
    if (!Number.isInteger(value)) {
      throw new Error('The VALUE must be an integer on page() method.');
    }

    this.pageValue.number = value;

    return this;
  }

  limit(value) {
    if (!Number.isInteger(value)) {
      throw new Error('The VALUE must be an integer on limit() method.');
    }

    this.pageValue.limit = value;

    return this;
  }

  offset(value) {
    if (!Number.isInteger(value)) {
      throw new Error('The VALUE must be an integer on limit() method.');
    }

    this.pageValue.offset = value;

    return this;
  }

  params(payload) {
    if (payload === undefined || payload.constructor !== Object) {
      throw new Error('You must pass a payload/object as param.');
    }
    let param = this.payload;
    this.payload = _.merge(param, payload);

    return this;
  }
}