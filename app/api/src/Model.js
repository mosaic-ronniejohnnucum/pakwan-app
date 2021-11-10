import Builder from './Builder';
import StaticModel from './StaticModel';

export default class Model extends StaticModel {

  constructor(...attributes) {
    super();

    if (attributes.length === 0) {
      this._builder = new Builder(this);
    } else {
      Object.assign(this, ...attributes);
    }

    if (this.baseURL === undefined) {
      throw new Error('You must declare baseURL() method.');
    }

    if (this.request === undefined) {
      throw new Error('You must declare request() method.');
    }

    if (this.$http === undefined) {
      throw new Error('You must set $http property');
    }
  }

  /**
   *  Setup
   */

  get $http() {
    return Model.$http;
  }

  resource() {
    return `${this.constructor.name.toLowerCase()}s`;
  }

  primaryKey() {
    return 'id';
  }

  getPrimaryKey() {
    return this[this.primaryKey()];
  }

  custom(resource) {
    this._customResource = resource;

    return this;
  }

  _from(url) {
    Object.defineProperty(this, '_fromResource', { get: () => url });
  }

  /**
   * Helpers
   */

  hasId() {
    const id = this.getPrimaryKey();
    return this.isValidId(id);
  }

  isValidId(id) {
    return id !== undefined && id !== 0 && id !== '';
  }

  endpoint() {
    if (this._customResource) {
      return `${this.baseURL()}/${this._customResource}`;
    }

    if (this._fromResource) {
      if (this.hasId()) {
        return `${this._fromResource}/${this.getPrimaryKey()}`;
      } else {
        return this._fromResource;
      }
    }

    if (this.hasId()) {
      return `${this.baseURL()}/${this.resource()}/${this.getPrimaryKey()}`;
    } else {
      return `${this.baseURL()}/${this.resource()}`;
    }
  }

  parameterNames() {
    return {
      filter: 'filter',
      sort: 'sort',
      search: 'search',
      fields: 'fields',
      page: 'page'
    };
  }

  select(...fields) {
    this._builder.select(...fields);

    return this;
  }

  search(field, value) {
    this._builder.find(field, value);

    return this;
  }

  when(condition, value, callback) {
    if (condition) {
      return callback(this, value) ? callback(this, value) : this;
    }
    return this;
  }

  where(field, value) {
    this._builder.where(field, value);

    return this;
  }

  whereIn(field, array) {
    this._builder.whereIn(field, array);

    return this;
  }

  orderBy(...args) {
    this._builder.orderBy(...args);

    return this;
  }

  page(value) {
    this._builder.pageNumber(value);

    return this;
  }

  pageSize(value) {
    this._builder.pageCount(value);

    return this;
  }

  limit(value) {
    this._builder.limit(value);

    return this;
  }

  offset(value) {
    this._builder.offset(value);

    return this;
  }

  params(payload) {
    this._builder.params(payload);
    return this;
  }

  /**
   * Result
   */

  first() {
    return this.get().then(response => {
      let item;

      if (response.data) {
        item = response.data[0];
      } else {
        item = response[0];
      }

      return item || {};
    });
  }

  $first() {
    return this
      .first()
      .then(response => response.data || response);
  }

  find(identifier) {
    if (identifier === undefined) {
      throw new Error('You must specify the param on find() method.');
    }
    let base = this._fromResource || `${this.baseURL()}/${this.resource()}`;
    let url = `${base}/${identifier}${this._builder.query()}`;

    return this.request({
      url,
      method: 'GET'
    }).then(response => new this.constructor(response.data));
  }

  $find(identifier) {
    if (identifier === undefined) {
      throw new Error('You must specify the param on $find() method.');
    }

    return this
      .find(identifier)
      .then(response => new this.constructor(response.data || response));
  }

  get() {
    let base = this._fromResource || `${this.baseURL()}/${this.resource()}`;
    base = this._customResource ? `${this.baseURL()}/${this._customResource}` : base;
    let url = `${base}${this._builder.query()}`;

    return this.request({
      url,
      method: 'GET'
    }).then(response => {
      let collection = response.data.data || response.data;
      collection = Array.isArray(collection) ? collection : [collection];

      collection = collection.map(c => {
        let item = new this.constructor(c);
        Object.defineProperty(item, '_fromResource', { get: () => this._fromResource });

        return item;
      });

      if (response.data.data !== undefined) {
        response.data.data = collection;
      } else {
        response.data = collection;
      }

      return response.data;
    });
  }

  $get() {
    return this
      .get()
      .then(response => response.data || response);
  }

  /**
   * Common CRUD operations
   */

  delete() {
    if (!this.hasId()) {
      throw new Error('This model has a empty ID.');
    }

    return this.request({
      url: this.endpoint(),
      method: 'DELETE'
    }).then(response => response);
  }

  save() {
    return this.hasId() ? this._update() : this._create();
  }

  _create() {
    return this.request({
      method: 'POST',
      url: this.endpoint(),
      data: this
    }).then(response => {
      let self = Object.assign(this, response.data);
      return self;
    });
  }

  _update() {
    return this.request({
      method: 'PATCH',
      url: this.endpoint(),
      data: this
    }).then(response => {
      let self = Object.assign(this, response.data);
      return self;
    });
  }

  /**
   * Relationship operations
   */

  delete2() {

    return this.request({
      url: this.endpoint(),
      method: 'DELETE'
    }).then(response => response);
  }

  attach(params) {
    return this.request({
      method: 'POST',
      url: this.endpoint(),
      data: params
    }).then(response => response);
  }

  sync(params) {
    return this.request({
      method: 'PUT',
      url: this.endpoint(),
      data: params
    }).then(response => response);
  }

  patch(params) {
    return this.request({
      method: 'PATCH',
      url: this.endpoint(),
      data: params
    }).then(response => {
      let self = Object.assign(this, response.data);
      return self;
    });
  }
}