export const transformDateString = (date: Date | string) => {
    return new Date(date).toDateString();
};
export const parsePageId = (path: string) =>
    path.substring(path.lastIndexOf("/") + 1);
