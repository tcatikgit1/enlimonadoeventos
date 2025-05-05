// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/enlimonadoeventos/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/enlimonadoeventos/node_modules/laravel-vite-plugin/dist/index.js";
import html from "file:///C:/laragon/www/enlimonadoeventos/node_modules/@rollup/plugin-html/dist/es/index.js";
import { glob } from "file:///C:/laragon/www/enlimonadoeventos/node_modules/glob/dist/esm/index.js";
function GetFilesArray(query) {
  return glob.sync(query);
}
var pageJsFiles = GetFilesArray("resources/assets/js/*.js");
var MyJS = GetFilesArray("resources/js/*.js");
var vendorJsFiles = GetFilesArray("resources/assets/vendor/js/*.js");
var LibsJsFiles = GetFilesArray("resources/assets/vendor/libs/**/*.js");
var CoreScssFiles = GetFilesArray("resources/assets/vendor/scss/**/!(_)*.scss");
var MyStyles = GetFilesArray("resources/scss/styles/**/!(_)*.scss");
var LibsScssFiles = GetFilesArray("resources/assets/vendor/libs/**/!(_)*.scss");
var LibsCssFiles = GetFilesArray("resources/assets/vendor/libs/**/*.css");
var FontsScssFiles = GetFilesArray("resources/assets/vendor/fonts/!(_)*.scss");
function libsWindowAssignment() {
  return {
    name: "libsWindowAssignment",
    transform(src, id) {
      if (id.includes("jkanban.js")) {
        return src.replace("this.jKanban", "window.jKanban");
      } else if (id.includes("vfs_fonts")) {
        return src.replaceAll("this.pdfMake", "window.pdfMake");
      }
    }
  };
}
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/assets/css/demo.css",
        "resources/js/app.js",
        ...pageJsFiles,
        ...vendorJsFiles,
        ...LibsJsFiles,
        ...MyStyles,
        ...MyJS,
        "resources/js/laravel-user-management.js",
        // Processing Laravel User Management CRUD JS File
        ...CoreScssFiles,
        ...LibsScssFiles,
        ...LibsCssFiles,
        ...FontsScssFiles
      ],
      refresh: true
    }),
    html(),
    libsWindowAssignment()
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxlbmxpbW9uYWRvZXZlbnRvc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcbGFyYWdvblxcXFx3d3dcXFxcZW5saW1vbmFkb2V2ZW50b3NcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L2xhcmFnb24vd3d3L2VubGltb25hZG9ldmVudG9zL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCBodG1sIGZyb20gJ0Byb2xsdXAvcGx1Z2luLWh0bWwnO1xuaW1wb3J0IHsgZ2xvYiB9IGZyb20gJ2dsb2InO1xuXG4vKipcbiAqIEdldCBGaWxlcyBmcm9tIGEgZGlyZWN0b3J5XG4gKiBAcGFyYW0ge3N0cmluZ30gcXVlcnlcbiAqIEByZXR1cm5zIGFycmF5XG4gKi9cbmZ1bmN0aW9uIEdldEZpbGVzQXJyYXkocXVlcnkpIHtcbiAgcmV0dXJuIGdsb2Iuc3luYyhxdWVyeSk7XG59XG4vKipcbiAqIEpzIEZpbGVzXG4gKi9cbi8vIFBhZ2UgSlMgRmlsZXNcbmNvbnN0IHBhZ2VKc0ZpbGVzID0gR2V0RmlsZXNBcnJheSgncmVzb3VyY2VzL2Fzc2V0cy9qcy8qLmpzJyk7XG5jb25zdCBNeUpTID0gR2V0RmlsZXNBcnJheSgncmVzb3VyY2VzL2pzLyouanMnKTtcblxuXG4vLyBQcm9jZXNzaW5nIFZlbmRvciBKUyBGaWxlc1xuY29uc3QgdmVuZG9ySnNGaWxlcyA9IEdldEZpbGVzQXJyYXkoJ3Jlc291cmNlcy9hc3NldHMvdmVuZG9yL2pzLyouanMnKTtcblxuLy8gUHJvY2Vzc2luZyBMaWJzIEpTIEZpbGVzXG5jb25zdCBMaWJzSnNGaWxlcyA9IEdldEZpbGVzQXJyYXkoJ3Jlc291cmNlcy9hc3NldHMvdmVuZG9yL2xpYnMvKiovKi5qcycpO1xuXG4vKipcbiAqIFNjc3MgRmlsZXNcbiAqL1xuLy8gUHJvY2Vzc2luZyBDb3JlLCBUaGVtZXMgJiBQYWdlcyBTY3NzIEZpbGVzXG5jb25zdCBDb3JlU2Nzc0ZpbGVzID0gR2V0RmlsZXNBcnJheSgncmVzb3VyY2VzL2Fzc2V0cy92ZW5kb3Ivc2Nzcy8qKi8hKF8pKi5zY3NzJyk7XG5jb25zdCBNeVN0eWxlcyA9IEdldEZpbGVzQXJyYXkoJ3Jlc291cmNlcy9zY3NzL3N0eWxlcy8qKi8hKF8pKi5zY3NzJyk7XG5cbi8vIFByb2Nlc3NpbmcgTGlicyBTY3NzICYgQ3NzIEZpbGVzXG5jb25zdCBMaWJzU2Nzc0ZpbGVzID0gR2V0RmlsZXNBcnJheSgncmVzb3VyY2VzL2Fzc2V0cy92ZW5kb3IvbGlicy8qKi8hKF8pKi5zY3NzJyk7XG5jb25zdCBMaWJzQ3NzRmlsZXMgPSBHZXRGaWxlc0FycmF5KCdyZXNvdXJjZXMvYXNzZXRzL3ZlbmRvci9saWJzLyoqLyouY3NzJyk7XG5cbi8vIFByb2Nlc3NpbmcgRm9udHMgU2NzcyBGaWxlc1xuY29uc3QgRm9udHNTY3NzRmlsZXMgPSBHZXRGaWxlc0FycmF5KCdyZXNvdXJjZXMvYXNzZXRzL3ZlbmRvci9mb250cy8hKF8pKi5zY3NzJyk7XG5cbi8vIFByb2Nlc3NpbmcgV2luZG93IEFzc2lnbm1lbnQgZm9yIExpYnMgbGlrZSBqS2FuYmFuLCBwZGZNYWtlXG5mdW5jdGlvbiBsaWJzV2luZG93QXNzaWdubWVudCgpIHtcbiAgcmV0dXJuIHtcbiAgICBuYW1lOiAnbGlic1dpbmRvd0Fzc2lnbm1lbnQnLFxuXG4gICAgdHJhbnNmb3JtKHNyYywgaWQpIHtcbiAgICAgIGlmIChpZC5pbmNsdWRlcygnamthbmJhbi5qcycpKSB7XG4gICAgICAgIHJldHVybiBzcmMucmVwbGFjZSgndGhpcy5qS2FuYmFuJywgJ3dpbmRvdy5qS2FuYmFuJyk7XG4gICAgICB9IGVsc2UgaWYgKGlkLmluY2x1ZGVzKCd2ZnNfZm9udHMnKSkge1xuICAgICAgICByZXR1cm4gc3JjLnJlcGxhY2VBbGwoJ3RoaXMucGRmTWFrZScsICd3aW5kb3cucGRmTWFrZScpO1xuICAgICAgfVxuICAgIH1cbiAgfTtcbn1cblxuXG5cbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XG4gIHBsdWdpbnM6IFtcbiAgICBsYXJhdmVsKHtcbiAgICAgIGlucHV0OiBbXG4gICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9jc3MvZGVtby5jc3MnLFxuICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgIC4uLnBhZ2VKc0ZpbGVzLFxuICAgICAgICAuLi52ZW5kb3JKc0ZpbGVzLFxuICAgICAgICAuLi5MaWJzSnNGaWxlcyxcbiAgICAgICAgLi4uTXlTdHlsZXMsXG4gICAgICAgIC4uLk15SlMsXG4gICAgICAgICdyZXNvdXJjZXMvanMvbGFyYXZlbC11c2VyLW1hbmFnZW1lbnQuanMnLCAvLyBQcm9jZXNzaW5nIExhcmF2ZWwgVXNlciBNYW5hZ2VtZW50IENSVUQgSlMgRmlsZVxuICAgICAgICAuLi5Db3JlU2Nzc0ZpbGVzLFxuICAgICAgICAuLi5MaWJzU2Nzc0ZpbGVzLFxuICAgICAgICAuLi5MaWJzQ3NzRmlsZXMsXG4gICAgICAgIC4uLkZvbnRzU2Nzc0ZpbGVzXG4gICAgICBdLFxuICAgICAgcmVmcmVzaDogdHJ1ZVxuICAgIH0pLFxuICAgIGh0bWwoKSxcbiAgICBsaWJzV2luZG93QXNzaWdubWVudCgpXG4gIF1cbn0pO1xuXG5cbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBMFIsU0FBUyxvQkFBb0I7QUFDdlQsT0FBTyxhQUFhO0FBQ3BCLE9BQU8sVUFBVTtBQUNqQixTQUFTLFlBQVk7QUFPckIsU0FBUyxjQUFjLE9BQU87QUFDNUIsU0FBTyxLQUFLLEtBQUssS0FBSztBQUN4QjtBQUtBLElBQU0sY0FBYyxjQUFjLDBCQUEwQjtBQUM1RCxJQUFNLE9BQU8sY0FBYyxtQkFBbUI7QUFJOUMsSUFBTSxnQkFBZ0IsY0FBYyxpQ0FBaUM7QUFHckUsSUFBTSxjQUFjLGNBQWMsc0NBQXNDO0FBTXhFLElBQU0sZ0JBQWdCLGNBQWMsNENBQTRDO0FBQ2hGLElBQU0sV0FBVyxjQUFjLHFDQUFxQztBQUdwRSxJQUFNLGdCQUFnQixjQUFjLDRDQUE0QztBQUNoRixJQUFNLGVBQWUsY0FBYyx1Q0FBdUM7QUFHMUUsSUFBTSxpQkFBaUIsY0FBYywwQ0FBMEM7QUFHL0UsU0FBUyx1QkFBdUI7QUFDOUIsU0FBTztBQUFBLElBQ0wsTUFBTTtBQUFBLElBRU4sVUFBVSxLQUFLLElBQUk7QUFDakIsVUFBSSxHQUFHLFNBQVMsWUFBWSxHQUFHO0FBQzdCLGVBQU8sSUFBSSxRQUFRLGdCQUFnQixnQkFBZ0I7QUFBQSxNQUNyRCxXQUFXLEdBQUcsU0FBUyxXQUFXLEdBQUc7QUFDbkMsZUFBTyxJQUFJLFdBQVcsZ0JBQWdCLGdCQUFnQjtBQUFBLE1BQ3hEO0FBQUEsSUFDRjtBQUFBLEVBQ0Y7QUFDRjtBQUlBLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQzFCLFNBQVM7QUFBQSxJQUNQLFFBQVE7QUFBQSxNQUNOLE9BQU87QUFBQSxRQUNMO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBLEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNIO0FBQUE7QUFBQSxRQUNBLEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxRQUNILEdBQUc7QUFBQSxNQUNMO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDWCxDQUFDO0FBQUEsSUFDRCxLQUFLO0FBQUEsSUFDTCxxQkFBcUI7QUFBQSxFQUN2QjtBQUNGLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
