import Model from '~/api/src/Model';

export default function (ctx, injext) {
  Model.$http = ctx.$axios;
}